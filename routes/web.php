<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\JalurController;
use App\Http\Controllers\JenisKegiatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenjangController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProgramController;
use App\Models\JenisKegiatan;

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
    return redirect('/home');
})->name('guest.root');
Route::get('/login', function () {
    return view('non-dashboard/auth/login');
})->name('auth.login');
Route::get('/home', function () {
    return view('non-dashboard/landing-page/home');
})->name('guest.home');
Route::get('/about', function () {
    return view('non-dashboard/landing-page/about');
})->name('guest.about');
Route::get('/kontak', function () {
    return view('non-dashboard/landing-page/contact');
})->name('guest.contact');
Route::get('/panduan', function () {
    return view('non-dashboard/landing-page/panduan');
})->name('guest.guide');
Route::get('/pendaftaran', function () {
    return view('non-dashboard/landing-page/regist-steps/pendaftaran-home');
})->name('guest.registration.home');

Route::get('/pendaftaran1', function () {
    return view('non-dashboard/landing-page/regist-steps/pendaftaran1');
})->name('guest.registration.first');

Route::get('/pendaftaran2', function () {
    return view('non-dashboard/landing-page/regist-steps/pendaftaran2');
});

Route::get('/pendaftaran3', function () {
    return view('non-dashboard/landing-page/regist-steps/pendaftaran3');
});

Route::get('/pendaftaran4', function () {
    return view('non-dashboard/landing-page/regist-steps/pendaftaran4');
});

Route::get('/pendaftaran5', function () {
    return view('non-dashboard/landing-page/regist-steps/pendaftaran5');
});

Route::get('/pendaftaran6', function () {
    return view('non-dashboard/landing-page/regist-steps/pendaftaran6');
});

// Dashboard

Route::group(['prefix' => 'dashboard/'], function(){
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'admin', ], function() {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('/referensi-kegiatan', JenisKegiatanController::class);
        Route::resource('/jenjang-pendidikan', JenjangController::class);
        Route::resource('/jalur-penerimaan', JalurController::class);
        Route::resource('/program-penerimaan', ProgramController::class);
        Route::resource('/data-pendaftar', PendaftarController::class);
    });
});
