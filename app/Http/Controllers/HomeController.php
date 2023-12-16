<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('non-dashboard/landing-page/home');
    }
    public function about()
    {
        return view('non-dashboard/landing-page/about');
    }
    public function contact()
    {
        return view('non-dashboard/landing-page/contact');
    }
    public function guide()
    {
        return view('non-dashboard/landing-page/panduan');
    }
    public function registration()
    {
        return view('non-dashboard/landing-page/regist-steps/pendaftaran-home');
    }
}
