<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;
use Laravel\Cashier\Cashier;
use App\Services\SubscriptionService;


class WebhookController extends Controller
{

    private $endpointSecret;

    public function __construct()
    {
        $this->endpointSecret = env('STRIPE_WEBHOOK_SECRET');
    }


    public function handleWebhook2(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $event = null;

        try {
            $event = Webhook::constructEvent(
                $payload,
                $sigHeader,
                $this->endpointSecret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            Log::error('Invalid Stripe payload', ['error' => $e->getMessage()]);
            return response('Invalid payload', 400);
        } catch (SignatureVerificationException $e) {
            // Invalid signature
            Log::error('Invalid Stripe signature', ['error' => $e->getMessage()]);
            return response('Invalid signature', 400);
        }

        // log info $event into beautify
        // Log::info('Stripe Webhook Event Received: ' . json_encode($event, JSON_PRETTY_PRINT));

        // Handle the event
        switch ($event->type) {
            case 'payment_intent.succeeded':
                $paymentIntent = $event->data->object;

                $user = Cashier::findBillable($paymentIntent->customer);

                Log::info('Stripe user: ' . json_encode($user, JSON_PRETTY_PRINT));


                Log::info('PaymentIntent was successful.', ['id' => $paymentIntent->id]);
                
                // Assign user a subscription
                $this->assignSubscription($paymentIntent);

                // Add your custom logic here
                break;

            case 'payment_intent.failed':
                $paymentIntent = $event->data->object;
                Log::warning('PaymentIntent failed.', ['id' => $paymentIntent->id]);
                // Add your custom logic here
                break;

            case 'customer.subscription.created':
                $subscription = $event->data->object;

                $planId = $event->data->object->items->data[0]->plan->id;
                

                Log::info('Stripe user: customer.subscription.created ' . json_encode($event, JSON_PRETTY_PRINT));

                Log::info('Subscription was created.', ['id' => $subscription->id]);
                // Add your custom logic here
                $this->assignSubscription($subscription);
                break;

            default:
                Log::info('Received unknown event type.', ['type' => $event->type]);
                break;
        }

        return response('Webhook handled', 200);
    }


    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $event = null;

        try {
            $event = Webhook::constructEvent(
                $payload,
                $sigHeader,
                $this->endpointSecret
            );
        } catch (\UnexpectedValueException $e) {
            Log::error('Invalid Stripe payload', ['error' => $e->getMessage()]);
            return response('Invalid payload', 400);
        } catch (SignatureVerificationException $e) {
            Log::error('Invalid Stripe signature', ['error' => $e->getMessage()]);
            return response('Invalid signature', 400);
        }

        // Log the received event
        Log::info('Stripe Webhook Event Received', [
            'type' => $event->type,
            'id' => $event->id,
        ]);

        // Process the event
        switch ($event->type) {
            case 'payment_intent.succeeded':
                $this->handlePaymentIntentSucceeded($event->data->object);
                break;

            case 'payment_intent.failed':
                $this->handlePaymentIntentFailed($event->data->object);
                break;

            case 'customer.subscription.created':
                $this->handleSubscriptionCreated($event->data->object);
                break;

            default:
                Log::info('Unhandled event type', ['type' => $event->type]);
                break;
        }

        return response('Webhook handled', 200);
    }



    protected function assignSubscription22($paymentIntent)
    {
        // $userId = $paymentIntent->metadata->user_id ?? null;
        $planId = $paymentIntent->items->data[0]->plan->id ?? null;

        $user = Cashier::findBillable($paymentIntent->customer);

        $paymentMethod = $paymentIntent->payment_method;

        if ($user && $paymentMethod) {
            $request = new Request([
                'user_id' => $user->id,
                'payment_method' => $paymentMethod,
                'planId' => $planId,
            ]);

            $stripeController = new StripeController();
            $stripeController->handleSubscription($request);
        } else {
            Log::error('Missing user_id or payment_method in paymentIntent metadata.');

            Log::error('Failed to assign subscription: Missing user or payment method.', [
                'customer_id' => $paymentIntent->customer,
                'payment_method' => $paymentIntent->payment_method,
            ]);
        }
    }


    protected function assignSubscription($paymentIntent)
    {
        $planId = $paymentIntent->items->data[0]->plan->id ?? null;

        $user = Cashier::findBillable($paymentIntent->customer);
        $paymentMethod = $paymentIntent->payment_method;

        if ($user && $paymentMethod && $planId) {
            try {
                // Use a service or dedicated subscription handler for better modularity
                app(SubscriptionService::class)->assignSubscriptionToUser($user, $paymentMethod, $planId);

                Log::info('Subscription successfully assigned.', [
                    'user_id' => $user->id,
                    'plan_id' => $planId,
                    'payment_method' => $paymentMethod,
                ]);
            } catch (\Exception $e) {
                Log::error('Error while assigning subscription.', [
                    'user_id' => $user->id ?? null,
                    'plan_id' => $planId,
                    'payment_method' => $paymentMethod,
                    'error' => $e->getMessage(),
                ]);
            }
        } else {
            Log::error('Failed to assign subscription: Missing user, payment method, or plan ID.', [
                'customer_id' => $paymentIntent->customer,
                'payment_method' => $paymentMethod,
                'plan_id' => $planId,
            ]);
        }
    }




    protected function handlePaymentIntentSucceeded($paymentIntent)
    {
        $user = Cashier::findBillable($paymentIntent->customer);

        if ($user) {
            Log::info('PaymentIntent succeeded for user.', [
                'user_id' => $user->id,
                'payment_intent_id' => $paymentIntent->id,
            ]);

            // Assign the subscription
            $this->assignSubscription($paymentIntent);
        } else {
            Log::error('User not found for PaymentIntent.', [
                'payment_intent_id' => $paymentIntent->id,
            ]);
        }
    }


    protected function handleSubscriptionCreated($subscription)
    {
        $customerId = $subscription->customer;
        $planId = $subscription->items->data[0]->plan->id;

        Log::info('Subscription created.', [
            'customer_id' => $customerId,
            'plan_id' => $planId,
            'subscription_id' => $subscription->id,
        ]);

        $user = Cashier::findBillable($customerId);

        if ($user) {
            Log::info('User found for subscription.', [
                'user_id' => $user->id,
            ]);

            // Assign subscription to user (modify if necessary)
            $this->assignSubscription($subscription);
        } else {
            Log::error('User not found for subscription.', [
                'customer_id' => $customerId,
                'subscription_id' => $subscription->id,
            ]);
        }
    }



    protected function handlePaymentIntentFailed($paymentIntent)
    {
        Log::warning('PaymentIntent failed.', [
            'payment_intent_id' => $paymentIntent->id,
        ]);

        // Add custom failure handling logic here
    }



}
