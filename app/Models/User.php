<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";

    protected $fillable = [
        'id',
        'role_id',
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'access_token',
        'email_verified_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime'
    ];
}