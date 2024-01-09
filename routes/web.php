<?php

use App\Http\Controllers\Admin\DaftarPasienControlleer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\JadwalDokterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataPasienController;
use App\Http\Controllers\Admin\InstalasiController;
use App\Http\Controllers\Admin\KamarRawatController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\LoketController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\DaftarAntrianController;
use App\Http\Controllers\dokter\HomeController;
use App\Http\Controllers\User\DashboardControllor;
use App\Http\Controllers\User\PasienDaftarController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('user.home');
// });



Route::get('/', [DashboardControllor::class, 'index']);

Route::get('layanan-hospital', [DashboardControllor::class, 'layanan']);
Route::get('daftar-jadwal-dokter', [DashboardControllor::class, 'dokter']);
Route::get('info-kamar-rawat', [DashboardControllor::class, 'kamar']);

Route::get('pasien-daftar', [PasienDaftarController::class, 'index']);
Route::get('pasien-daftar/create-step-one', [PasienDaftarController::class, 'createStepOneLama']);
Route::post('pasien-daftar/Post-step-one', [PasienDaftarController::class, 'postCreateStepOneLama']);
Route::get('pasien-daftar/create-step-two', [PasienDaftarController::class, 'createStepTwo']);
//data json
Route::get('poli/{id}', [PasienDaftarController::class, 'getLoket']);
Route::get('kunjungan/{id}', [PasienDaftarController::class, 'getDokter']);

Route::get('pasien-daftar/create-step-one-baru', [PasienDaftarController::class, 'createStepOneBaru']);
Route::post('pasien-daftar/Post-step-one-baru', [PasienDaftarController::class, 'postCreateStepOneBaru']);
Route::get('pasien-daftar/create-step-two-baru', [PasienDaftarController::class, 'createStepTwoBaru']);

Route::post('pasien-daftar/post-step-two', [PasienDaftarController::class, 'postCreateStepTwo']);
Route::get('pasien-daftar/create-step-three', [PasienDaftarController::class, 'createStepThree']);
Route::post('pasien-daftar/post-step-three', [PasienDaftarController::class, 'postCreateStepThree']);

Route::get('download-pdf', [PasienDaftarController::class, 'view_pdf']);
Route::get('bukti-registrasi', [PasienDaftarController::class, 'bukti']);


Route::controller(AuthController::class)->group(function (){
    Route::get('login', 'index')->name('login');
    Route::post('login/proseslogin', 'proseslogin');
    Route::get('logout', 'logout');
    Route::get('register', 'register');
    Route::post('register/create', 'create');
    Route::get('register-dokter', 'registerDokter');
    Route::post('register-dokter/create', 'createDokter');
});

Route::group(['middleware' => ['auth']], function (){
    Route::group(['middleware' => ['CekUser:1']], function () {

        Route::get('home', [DashboardController::class, 'index']);

        Route::get('jadwal-dokter', [JadwalDokterController::class, 'index']);
        Route::get('jadwal-dokter/create', [JadwalDokterController::class, 'create']);
        Route::post('jadwal-dokter/store', [JadwalDokterController::class, 'store']);
        Route::get('jadwal-dokter/edit/{id}', [JadwalDokterController::class, 'edit']);
        Route::post('jadwal-dokter/update', [JadwalDokterController::class, 'update']);
        Route::delete('jadwal-dokter/delete/{id}', [JadwalDokterController::class, 'destroy']);

        Route::get('kamar-rawat', [KamarRawatController::class, 'index']);
        Route::get('kamar-rawat/create', [KamarRawatController::class, 'create']);
        Route::post('kamar-rawat/store', [KamarRawatController::class, 'store']);
        Route::get('kamar-rawat/edit/{id}', [KamarRawatController::class, 'edit']);
        Route::post('kamar-rawat/update', [KamarRawatController::class, 'update']);
        Route::delete('kamar-rawat/delete/{id}', [KamarRawatController::class, 'destroy']);

        Route::get('layanan', [LayananController::class, 'index']);

        
        Route::get('pendaftaran-pasien/cek', [DaftarPasienControlleer::class, 'cek']);
        Route::get('pendaftaran-pasien/create-step-one', [DaftarPasienControlleer::class, 'createStepOneLama']);
        Route::post('pendaftaran-pasien/Post-step-one', [DaftarPasienControlleer::class, 'postCreateStepOneLama']);
        Route::get('pendaftaran-pasien/create-step-two', [DaftarPasienControlleer::class, 'createStepTwo']);
        //data json
        Route::get('loket/{id}', [DaftarPasienControlleer::class, 'getLoket']);
        Route::get('klinik-dokter/{id}', [DaftarPasienControlleer::class, 'getDokter']);

        Route::get('pendaftaran-pasien/create-step-one-baru', [DaftarPasienControlleer::class, 'createStepOneBaru']);
        Route::post('pendaftaran-pasien/Post-step-one-baru', [DaftarPasienControlleer::class, 'postCreateStepOneBaru']);
        Route::get('pendaftaran-pasien/create-step-two-baru', [DaftarPasienControlleer::class, 'createStepTwoBaru']);

        Route::post('pendaftaran-pasien/post-step-two', [DaftarPasienControlleer::class, 'postCreateStepTwo']);
        Route::get('pendaftaran-pasien/create-step-three', [DaftarPasienControlleer::class, 'createStepThree']);
        Route::post('pendaftaran-pasien/post-step-three', [DaftarPasienControlleer::class, 'postCreateStepThree']);

        Route::get('download', [DaftarPasienControlleer::class, 'view_pdf']);
        Route::get('bukti-registrasi', [DaftarPasienControlleer::class, 'bukti']);


        Route::get('data-pasien', [DaftarPasienControlleer::class, 'index']);
        Route::get('data-pasien/edit/{id}', [DaftarPasienControlleer::class, 'edit']);
        Route::post('data-pasien/update', [DaftarPasienControlleer::class, 'update']);
        Route::delete('data-pasien/delete/{id}', [DataPasienController::class, 'destroy']);

        Route::get('daftar-antrian', [DaftarAntrianController::class, 'index']);
        Route::get('daftar-antrian/edit/{id}', [DaftarAntrianController::class, 'edit']);
        Route::post('daftar-antrian/update', [DaftarAntrianController::class, 'update']);

        Route::get('loket', [LoketController::class, 'index']);
        Route::get('loket-tambah', [LoketController::class, 'create']);
        Route::post('loket/store', [LoketController::class, 'store']);
        Route::get('loket/edit/{id}', [LoketController::class, 'edit']);
        Route::post('loket/update', [LoketController::class, 'update']);
        Route::delete('loket/delete/{id}', [LoketController::class, 'destroy']);


        Route::get('auth', [AuthController::class, 'list']);
        Route::get('auth/edit/{id}', [AuthController::class, 'edit']);
        Route::post('auth/update', [AuthController::class, 'update']);
        Route::delete('auth/delete/{id}', [AuthController::class, 'destroy']);

        Route::get('instalasi', [InstalasiController::class, 'index']);
        Route::get('instalasi/edit/{id}', [InstalasiController::class, 'edit']);
        Route::post('instalasi/update', [InstalasiController::class, 'update']);
        Route::delete('instalasi/delete/{id}', [InstalasiController::class, 'destroy']);

        Route::get('report', [ReportController::class, 'index']);
    });

    Route::group(['middleware' => ['CekUser:2']], function () {

        Route::get('home-dokter', [HomeController::class, 'index']);
        
        Route::get('jadwal', [HomeController::class, 'JadwalDokter']);

        Route::get('daftar-pasien-dokter', [HomeController::class, 'DaftarPasien']);

       
    });
});

// Route::middleware(['auth', 'CekUserlogin:1'])->group(function () {
  
//     Route::get('home', [DashboardController::class, 'index']);
// });



