<?php

use App\Http\Controllers\Admin\DaftarPasienControlleer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\JadwalDokterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KamarRawatController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\DaftarAntrianController;
use App\Http\Controllers\TesController;
use App\Livewire\Wizard;
use App\Livewire\MultiStepFormWizard;

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
    return view('login');
});

// Route::get('/', function () {
//     return view('default');
// });

// Route::get('products', 'TesController@index')->name('products.index');
Route::get('products', [TesController::class, 'index']);

// Route::get('products/create-step-one', 'TesController@createStepOne')->name('products.create.step.one');
// Route::post('products/create-step-one', 'TesController@postCreateStepOne')->name('products.create.step.one.post');

// Route::get('products/create-step-two', 'TesController@createStepTwo')->name('products.create.step.two');
// Route::post('products/create-step-two', 'TesController@postCreateStepTwo')->name('products.create.step.two.post');

// Route::get('products/create-step-three', 'TesController@createStepThree')->name('products.create.step.three');
// Route::post('products/create-step-three', 'TesController@postCreateStepThree')->name('products.create.step.three.post');

Route::get('tes', [TesController::class, 'coba']);
// Route::post('products/create', [TesController::class, 'postCreateStepOne']);

// Route::get('products/create-step-two', [TesController::class, 'createStepTwo']);
// Route::post('products/post-step-two', [TesController::class, 'postCreateStepTwo']);

// Route::get('products/create-step-three', [TesController::class, 'createStepThree']);
// Route::post('products/post-step-three', [TesController::class, 'postCreateStepThree']);


// Route::get('tes', [Wizard::class, 'render']);

Route::controller(AuthController::class)->group(function (){
    Route::get('login', 'index')->name('login');
    Route::post('login/proseslogin', 'proseslogin');
    Route::get('logout', 'logout');
    Route::get('register', 'register');
    Route::post('register/create', 'create');
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

        Route::get('daftar-antrian', [DaftarAntrianController::class, 'index']);
        Route::get('daftar-antrian/edit/{id}', [DaftarAntrianController::class, 'edit']);
        Route::post('daftar-antrian/update', [DaftarAntrianController::class, 'update']);

        

    });
});

// Route::middleware(['auth', 'CekUserlogin:1'])->group(function () {
  
//     Route::get('home', [DashboardController::class, 'index']);
// });



