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

Route::get('/dashboard', function () {
    return view('dashboard/home');
});

Route::get('/dashboard-analytics', function () {
    return view('dashboard/dashboard-analytics');
});

Route::get('/dashboard-crm', function () {
    return view('dashboard/dashboard-crm');
});

Route::get('/user/edit-profil', function () {
    return view('dashboard/user/edit-profil');
});

Route::get('/admin/dashboard/dashboard', function () {
    return view('dashboard/admin/dashboard/dashboard');
});

Route::get('/admin/kegiatan/kegiatan', function () {
    return view('dashboard/admin/kegiatan/kegiatan');
});

Route::get('/admin/jenjang-penerimaan/jenjang-penerimaan', function () {
    return view('dashboard/admin/jenjang-penerimaan/jenjang-penerimaan');
});

Route::get('/admin/jalur-penerimaan/jalur-penerimaan', function () {
    return view('dashboard/admin/jalur-penerimaan/jalur-penerimaan');
});

Route::get('/admin/program-penerimaan/program-penerimaan', function () {
    return view('dashboard/admin/program-penerimaan/program-penerimaan');
});

Route::get('/admin/data-pendaftar/data-pendaftar', function () {
    return view('dashboard/admin/data-pendaftar/data-pendaftar');
});

Route::get('/admin/data-kelulusan/data-kelulusan', function () {
    return view('dashboard/admin/data-kelulusan/data-kelulusan');
});

Route::get('/admin/pengumuman/pengumuman', function () {
    return view('dashboard/admin/pengumuman/pengumuman');
});

Route::get('/bendahara/dashboard/dashboard', function () {
    return view('dashboard/bendahara/dashboard/dashboard');
});

Route::get('/bendahara/data-pendaftar/data-pendaftar', function () {
    return view('dashboard/bendahara/data-pendaftar/data-pendaftar');
});

Route::get('/non-admin/dashboard/dashboard', function () {
    return view('dashboard/non-admin/dashboard/dashboard');
});

Route::get('/non-admin/biodata/biodata', function () {
    return view('dashboard/non-admin/biodata/biodata');
});

Route::get('/non-admin/pendaftaran-saya/pendaftaran-saya', function () {
    return view('dashboard/non-admin/pendaftaran-saya/pendaftaran-saya');
});

Route::get('/non-admin/pembayaran-saya/pembayaran-saya', function () {
    return view('dashboard/non-admin/pembayaran-saya/pembayaran-saya');
});

Route::get('/non-admin/pengumuman/pengumuman', function () {
    return view('dashboard/non-admin/pengumuman/pengumuman');
});

Route::get('/non-admin/panduan/panduan', function () {
    return view('dashboard/non-admin/panduan/panduan');
});