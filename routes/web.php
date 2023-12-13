<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('non-dashboard/home');
});

Route::get('/home', function () {
    return view('non-dashboard/home');
});

Route::get('/about', function () {
    return view('non-dashboard/about');
});

Route::get('/contact1', function () {
    return view('non-dashboard/contact1');
});

Route::get('/contact', function () {
    return view('non-dashboard/contact');
});

Route::get('/panduan', function () {
    return view('non-dashboard/panduan');
});

Route::get('/pendaftaran', function () {
    return view('non-dashboard/pendaftaran');
});

Route::get('/pendaftaran2', function () {
    return view('non-dashboard/pendaftaran2');
});

Route::get('/pendaftaran3', function () {
    return view('non-dashboard/pendaftaran3');
});

Route::get('/pendaftaran4', function () {
    return view('non-dashboard/pendaftaran4');
});

Route::get('/pendaftaran5', function () {
    return view('non-dashboard/pendaftaran5');
});

Route::get('/pendaftaran6', function () {
    return view('non-dashboard/pendaftaran6');
});

Route::get('/login', function () {
    return view('non-dashboard/auth/login');
});