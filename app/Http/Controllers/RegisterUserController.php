<?php

namespace App\Http\Controllers;

use App\Events\NewRegisteredUserEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function register()
    {
        $user = new \App\User();
        $user->name = 'Pepito Palotes';
        $user->email = 'sergiturbadenas@gmail.com';
        event(new Registered($user));
    }
}
