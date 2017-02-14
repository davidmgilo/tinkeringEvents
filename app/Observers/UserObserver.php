<?php

namespace App\Observers;

use App\Mail\WelcomeEmailMarkdown;
use App\User;
use Mail;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        dd('prova');
//        Mail::to($user->email)->send(new WelcomeEmailMarkdown($user));
    }

}