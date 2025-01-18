<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class SubscriptionService
{
    public function assignSubscriptionToUser($user, $paymentMethod, $planId)
    {
        try {
            $user->newSubscription('default', $planId)->create($paymentMethod);

            Log::info('Subscription created successfully.', [
                'user_id' => $user->id,
                'plan_id' => $planId,
                'payment_method' => $paymentMethod,
            ]);
        } catch (\Exception $e) {
            Log::error('Error assigning subscription.', [
                'user_id' => $user->id,
                'plan_id' => $planId,
                'payment_method' => $paymentMethod,
                'error' => $e->getMessage(),
            ]);

            throw $e; // Re-throw the exception for further handling if needed
        }
    }
}
