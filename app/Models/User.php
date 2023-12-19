<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Casts\MoneyCast;
use App\Traits\UserInfo;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements HasName, FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, UserInfo, SoftDeletes;

    public $increment = false;

    protected $primaryKey = 'username';

    protected $keyType = 'string';

    protected $attributes = [
        'type' => 'REG',
        'status' => 1,
        'role' => 'USR',
        'wallet' => 0,
        'commission' => 0,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'tel',
        'referer',
        'password',
        'wallet',
        'commission'
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
        'password' => 'hashed',
        'wallet' => MoneyCast::class,
        'commission' => MoneyCast::class,
    ];
}
