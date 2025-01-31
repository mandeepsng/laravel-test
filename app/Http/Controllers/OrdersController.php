<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;
use Laravel\Cashier\Subscription;


class OrdersController extends Controller
{
    public function orderHistory(Request $request)
    {
        $user = auth()->user();

        // Fetch all subscriptions (active + canceled)
        $subscriptions = Subscription::where('user_id', $user->id)->paginate(10);
    
        // Fetch all invoices (one-time purchases)
        $invoices = $user->invoices();
    
        // Fetch all payment intents from Stripe (for detailed history)
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $paymentIntents = $stripe->paymentIntents->all([
            'customer' => $user->stripe_id,
        ]);
    
        return view('user.orders.order-history', compact('subscriptions', 'invoices', 'paymentIntents'));
    }
}
