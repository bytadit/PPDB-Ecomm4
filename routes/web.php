<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JalurController;
use App\Http\Controllers\JenisKegiatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenjangController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\PendaftarDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenKegiatanController;
use App\Http\Controllers\RaporProgramController;
use App\Models\JenisKegiatan;
use Illuminate\Support\Facades\Auth;

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
Route::get('/home', [HomeController::class, 'home'])->name('guest.home');
Route::get('/about', [HomeController::class, 'about'])->name('guest.about');
Route::get('/kontak', [HomeController::class, 'contact'])->name('guest.contact');
Route::get('/panduan', [HomeController::class, 'guide'])->name('guest.guide');
// Routes Pendaftaran
Route::get('/pendaftaran', [HomeController::class, 'registration'])->name('guest.registration.home');
Route::get('/daftar-program/{program}/ketentuan', [PendaftarController::class, 'step1'])->name('guest.registration.step1');

Route::get('/daftar-program/{program}/data-siswa', [PendaftarController::class, 'step2'])->name('guest.registration.step2');
Route::post('/daftar-program/{program}/data-siswa', [PendaftarController::class, 'postStep2'])->name('guest.registration.step2.post');

Route::get('/daftar-program/{program}/data-orangtua', [PendaftarController::class, 'step3'])->name('guest.registration.step3');
Route::post('/daftar-program/{program}/data-orangtua', [PendaftarController::class, 'postStep3'])->name('guest.registration.step3.post');

Route::get('/daftar-program/{program}/data-sekolah', [PendaftarController::class, 'step4'])->name('guest.registration.step4');
Route::post('/daftar-program/{program}/data-sekolah', [PendaftarController::class, 'postStep4'])->name('guest.registration.step4.post');

Route::get('/daftar-program/{program}/data-nilai', [PendaftarController::class, 'step5'])->name('guest.registration.step5');
Route::post('/daftar-program/{program}/data-nilai', [PendaftarController::class, 'postStep5'])->name('guest.registration.step5.post');

Route::get('/daftar-program/{program}/data-review', [PendaftarController::class, 'step6'])->name('guest.registration.step6');
Route::post('/daftar-program/{program}/data-review', [PendaftarController::class, 'verifyStep6'])->name('guest.registration.step6.verify');

Route::get('/daftar-program/{program}/pembayaran', [PendaftarController::class, 'payment'])->name('guest.registration.payment');
Route::post('/daftar-program/{program}/pembayaran/{paymentId}/status', [PendaftarController::class, 'checkPaymentStatus'])->name('guest.registration.payment.status');
Route::post('/daftar-program/{program}/pembayaran', [PendaftarController::class, 'postPayment'])->name('guest.registration.payment.post');

Route::post('/daftar-program/{program}/pembayaran/callback', [PendaftarController::class, 'callback'])->name('guest.registration.payment.callback');
// Route::get('/daftar-program/{program}/pembayaran/process', [PendaftarController::class, 'paymentProcess'])->name('guest.registration.payment.process');

// Route::post('/initiate-payment', [PaymentController::class, 'initiatePayment']);
// Route::get('/check-payment-status/{paymentId}', [PaymentController::class, 'checkPaymentStatus']);



// Registration Routes
// Route::get('/pendaftaran1', function () {
//     return view('non-dashboard/landing-page/regist-steps/pendaftaran1');
// })->name('guest.registration.first');
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

// Auth Routes
Auth::routes();
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard/'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin', ], function() {
        // Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        // Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/program-penerimaan/{penerimaan}/detail', [ProgramController::class, 'detailProgram'])->name('programs.detail-program');
        Route::patch('/program-penerimaan/update-status/{penerimaan}', [ProgramController::class, 'updateStatus'])->name('programs.update-status');
        Route::put('/program-penerimaan/update-biaya/{penerimaan}', [BiayaController::class, 'updateBiayaDaftar'])->name('biaya-pendaftaran');
        Route::resource('/referensi-kegiatan', JenisKegiatanController::class);
        Route::resource('/jenjang-pendidikan', JenjangController::class);
        Route::resource('/jalur-penerimaan', JalurController::class);
        Route::resource('/program-penerimaan', ProgramController::class);
        Route::resource('/data-pendaftar', PendaftarController::class);
        Route::resource('/jadwal-kegiatan', JadwalController::class);
        Route::resource('/biaya', BiayaController::class);
        Route::resource('/syarat', PersyaratanController::class);
        Route::resource('/document', DokumenKegiatanController::class);
        Route::resource('/rapor', RaporProgramController::class);

    });
    Route::group(['middleware' => ['role:pendaftar'], 'prefix' => 'pendaftar', ], function() {
        // Route::get('/', [DashboardController::class, 'index'])->name('pendaftar.dashboard');
    });
});
