<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SubscriptionPlan;
use Stripe\Stripe;
use Stripe\Product;
use Stripe\Price;

class StripeController extends Controller
{

    // function to view index page
    public function index(Request $request): View
    {

        $plans = SubscriptionPlan::orderBy('id','DESC')->paginate(5);
        return view('admin.stripe.index',compact('plans'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    
    public function create()
    {
        return view('admin.stripe.create');
    }

    

    public function handleOneTimePayment(Request $request)
    {
        $user = User::find($request->user_id);
        $paymentMethod = $request->payment_method;

        $user->charge(1000, $paymentMethod); // Charge $10.00
        return response()->json(['message' => 'Payment successful']);
    }

    public function handleSubscription(Request $request)
    {
        $user = User::find($request->user_id);
        $paymentMethod = $request->payment_method;

        $planId = 'plan_ABC123XYZ'; 
        $user->newSubscription('default', $planId)->create($paymentMethod);
        return response()->json(['message' => 'Subscription successful']);
    }

    public function editSubscriptionPlan($id)
    {
        $plan = SubscriptionPlan::find($id);
        return view('admin.stripe.edit',compact('plan'));
    }

    // Function to handle updating the subscription plan
    public function updateSubscriptionPlan2(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Stripe::setApiKey(config('cashier.secret'));


        $product = Product::update($request->plan_id, [
            'name' => $request->plan_name,
        ]);

        $price = Price::create([
            'product' => $product->id,
            'unit_amount' => $request->amount,
            'currency' => 'usd',
            'recurring' => ['interval' => $request->interval],
        ]);

        // Update the plan in the database
        $plan = SubscriptionPlan::where('stripe_plan_id', $request->plan_id)->first();
        $plan->update([
            'name' => $request->plan_name,
            'amount' => $request->amount,
            'interval' => $request->interval,
        ]);

        return response()->json(['message' => 'Subscription plan updated successfully', 'product' => $product, 'price' => $price]);
    }


    public function updateSubscriptionPlan(Request $request, $planId)
    {
        // Set your Stripe API key
        Stripe::setApiKey(env('STRIPE_KEY_SECRET'));

        // Fetch the plan details from your database
        $subscriptionPlan = SubscriptionPlan::findOrFail($planId);

        // Update the Stripe product
        Product::update($subscriptionPlan->stripe_product_id, [
            'name' => $request->plan_name,
            // 'description' => $request->description, // Optional description
        ]);

        // Check if the price needs to be updated
        if ($request->amount != $subscriptionPlan->amount || $request->interval != $subscriptionPlan->interval) {
            // Create a new price (Stripe does not allow updating existing prices)
            $newPrice = Price::create([
                'unit_amount' => $request->amount,
                'currency' => 'usd',
                'recurring' => [
                    'interval' => $request->interval, // 'month', 'year', etc.
                ],
                'product' => $subscriptionPlan->stripe_product_id,
            ]);

            // Update the database with the new price ID
            $subscriptionPlan->update([
                'stripe_price_id' => $newPrice->id,
                'amount' => $request->amount,
                'interval' => $request->interval,
            ]);
        } else {
            // If no price change, update only the product details
            $subscriptionPlan->update([
                'name' => $request->plan_name,
            ]);
        }

        return response()->json(['message' => 'Subscription plan updated successfully']);
    }

    // Function to handle canceling the subscription plan
    public function cancelSubscriptionPlan(Request $request)
    {
        $user = User::find($request->user_id);

        $user->subscription('default')->cancel();
        return response()->json(['message' => 'Subscription plan canceled successfully']);
    }

    // Function to create a new subscription plan in Stripe
    public function createSubscriptionPlan(Request $request)
    {
        Stripe::setApiKey(env('STRIPED_KEY_SECRET'));

        $product = Product::create([
            'name' => $request->plan_name,
            'type' => 'service',
        ]);

        $price = Price::create([
            'product' => $product->id,
            'unit_amount' => $request->amount,
            'currency' => 'inr',
            'recurring' => [
                'interval' => 'month', // Frequency: 'day', 'week', 'month', or 'year'
                // 'trial_period_days' => $request->trial_days, // Add trial period days
            ],
        ]);

        // Save the plan to the database
        SubscriptionPlan::create([
            'stripe_plan_id' => $product->id,
            'stripe_price_id' => $price->id,
            'name' => $request->plan_name,
            'amount' => $request->amount,
            'currency' => 'usd',
            'interval' => 'month',
            // 'trial_days' => $request->trial_days, // Save trial period days
        ]);

        return response()->json(['message' => 'Subscription plan created successfully', 'product' => $product, 'price' => $price]);
    }

    // Function to create a one-time plan in Stripe
    public function createOneTimePlan(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $product = Product::create([
            'name' => $request->plan_name,
            'type' => 'service',
        ]);

        $price = Price::create([
            'product' => $product->id,
            'unit_amount' => $request->amount,
            'currency' => 'usd',
        ]);

        return response()->json(['message' => 'One-time plan created successfully', 'product' => $product, 'price' => $price]);
    }


    public function createStripePlan()
    {
        try {
            // Set your Stripe API key
            // Stripe::setApiKey(config('cashier.secret'));
            Stripe::setApiKey(env('STRIPED_KEY_SECRET'));

            // Step 1: Create a product
            $product = Product::create([
                'name' => 'Premium Plan',
                'description' => 'Access to all premium features.',
            ]);

            // Step 2: Create a price for the product
            $price = Price::create([
                'unit_amount' => 1999, // Amount in cents (1999 = $19.99)
                'currency' => 'usd',
                'recurring' => [
                    'interval' => 'month', // Frequency: 'day', 'week', 'month', or 'year'
                ],
                'product' => $product->id,
            ]);

            // Step 3: Return the created plan details
            return response()->json([
                'success' => true,
                'message' => 'Stripe plan created successfully.',
                'product_id' => $product->id,
                'price_id' => $price->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

}
