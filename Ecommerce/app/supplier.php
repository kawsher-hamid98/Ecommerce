<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class supplier extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'country', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
