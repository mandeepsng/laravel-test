<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Osiset\ShopifyApp\Contracts\ShopModel as IShopModel;
use Osiset\ShopifyApp\Traits\ShopModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Cashier\Billable;
use Illuminate\Auth\Events\Verified;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, ShopModel, HasRoles, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function socialAccounts()
    {
        return $this->hasMany(UserSocialAccount::class);
    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::retrieved(function ($user) {
    //         if (!$user->hasVerifiedEmail()) {
    //             throw new \Illuminate\Auth\AuthenticationException('Your email address is not verified.');
    //         }
    //     });
    // }


}
