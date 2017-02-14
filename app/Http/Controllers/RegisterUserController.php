<?php

namespace App\Http\Controllers;

use App\Events\NewRegisteredUserEvent;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function register()
    {
        event(new NewRegisteredUserEvent());
    }
}
