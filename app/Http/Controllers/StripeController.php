<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SubscriptionPlan;
use Stripe\Stripe;
use Stripe\Product;
use Stripe\Price;

class StripeController extends Controller
{
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

        $user->newSubscription('default', 'premium')->create($paymentMethod);
        return response()->json(['message' => 'Subscription successful']);
    }

    // Function to handle updating the subscription plan
    public function updateSubscriptionPlan(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

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
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $product = Product::create([
            'name' => $request->plan_name,
            'type' => 'service',
        ]);

        $price = Price::create([
            'product' => $product->id,
            'unit_amount' => $request->amount,
            'currency' => 'usd',
            'recurring' => ['interval' => $request->interval],
        ]);

        // Save the plan to the database
        SubscriptionPlan::create([
            'stripe_plan_id' => $price->id,
            'name' => $request->plan_name,
            'amount' => $request->amount,
            'currency' => 'usd',
            'interval' => $request->interval,
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
}
