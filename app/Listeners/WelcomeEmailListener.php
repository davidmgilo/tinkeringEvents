<?php

namespace App\Listeners;

use App\Events\NewRegisteredUserEvent;
use App\Mail\WelcomeEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class WelcomeEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        //dump('Listened NewRegisteredUserEvent');

        //Enviar email
        Mail::to('davidmgilo@gmail.com')->send(new WelcomeEmail());
    }
}
