<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;
use Laravel\Cashier\Cashier;


class WebhookController extends Controller
{

    private $endpointSecret;

    public function __construct()
    {
        $this->endpointSecret = env('STRIPE_WEBHOOK_SECRET');
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

            default:
                Log::info('Received unknown event type.', ['type' => $event->type]);
                break;
        }

        return response('Webhook handled', 200);
    }


    protected function assignSubscription($paymentIntent)
    {
        // $userId = $paymentIntent->metadata->user_id ?? null;

        $user = Cashier::findBillable($paymentIntent->customer);

        $paymentMethod = $paymentIntent->payment_method;

        if ($user && $paymentMethod) {
            $request = new Request([
                'user_id' => $user->id,
                'payment_method' => $paymentMethod,
            ]);

            $stripeController = new StripeController();
            $stripeController->handleSubscription($request);
        } else {
            Log::error('Missing user_id or payment_method in paymentIntent metadata.');
        }
    }


}
