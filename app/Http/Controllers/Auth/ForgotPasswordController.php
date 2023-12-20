<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('non-dashboard.auth.passwords.reset', [
            'title' => 'Reset Password',
            'token' =>  Str::random(60)
        ]);
    }

    public function sendResetLinkEmail(){
        return view('non-dashboard.auth.passwords.email', [
            'title' => 'Reset Password',
            'token' =>  Str::random(60)
        ]);
    }
}
