<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'stripe_plan_id',
        'stripe_price_id',
        'name',
        'amount',
        'currency',
        'interval',
    ];
}