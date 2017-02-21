<?php

namespace App\Http\Controllers;

use App\Events\NewRegisteredUserEvent;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Log;

class RegisterUserController extends Controller
{
    public function register()
    {
        $user = User::find(2);
//        $user = new \App\User();
//        $user->name = 'Pepito Palotes';
//        $user->email = 'sergiturbadenas@gmail.com';
        Log::info('Before event');
        event(new Registered($user));
        Log::info('After event');
        return view('mails.welcome');
    }
}
