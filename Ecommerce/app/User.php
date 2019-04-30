<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function form_store($data) 
    {
        $FirstName = Input::get('FirstName');
        $LastName  = Input::get('LastName');
        $email     = Input::get('email');
        $password  = Hash::make(Input::get('password'));

        $user = new User();

        $user -> FirstName = $FirstName;
        $user -> LastName  = $LastName;
        $user -> email     = $email;
        $user -> password  = $password;

        $user -> save();

    }


}
