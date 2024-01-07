<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->redirectTo = auth()->user()->roles->first()->name == 'admin' ? RouteServiceProvider::DASHBOARD_ADMIN : RouteServiceProvider::DASHBOARD_PENDAFTAR;
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('non-dashboard.auth.login', [
            'title' => 'Masuk Akun'
        ]);
    }
    public function username()
    {
        return 'nik'; // Use the 'nik' column for authentication
    }
}
