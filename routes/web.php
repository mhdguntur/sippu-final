<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardGaleriController;
use App\Http\Controllers\DashboardPelayananController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\PelayananPemerintahController;
use App\Http\Controllers\AuthPemerintah;
use App\Http\Controllers\PemerintahPendaftaranController;
use App\Http\Controllers\UMKMPemerintahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Produk
Route::controller(ProdukController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('produk/{produk:slug}', 'show');
    Route::get('produk/tentang/{user:id}', 'about');
});

// Pelayanan
Route::controller(PelayananController::class)->group(function () {
    Route::get('pelayanan', 'index');
    Route::get('pelayanan/{pelayanan:judul}', 'show');
    Route::get('pelayanan/{pelayanan:judul}/daftar', 'create')->middleware('auth');
    Route::post('pelayanan/daftar', 'store')->middleware('auth')->middleware('auth');
    Route::get('pelayanan/daftar/sukses', fn () => view('pelayanan.success', ['title' => 'Pendaftaran Sukses']));
});

// User Login & Registration
Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('signup', 'signup');
        Route::post('register', 'register');
        Route::get('signin', 'signin')->name('login');
        Route::post('authenticate', 'authenticate');
    });

    Route::get('signup/success', function () {
        return view('auth.signup_success', ['title' => 'Registrasi Berhasil']);
    })->name('signup-success');
});

// User Dashboard
Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::resource('dashboard/produk', DashboardProdukController::class)->parameters(
        ['produk' => 'produk:slug']
    );
    Route::resource('dashboard/galeri', DashboardGaleriController::class)->only(['store', 'destroy']);
    Route::get('dashboard/pelayanan', [DashboardPelayananController::class, 'index']);
    Route::get('dashboard/pelayanan/{pendaftaran:id}', [DashboardPelayananController::class, 'show']);
    Route::resource('dashboard/profil', DashboardProfileController::class)->only(['index', 'update']);
    Route::put('dashboard/profil/verif-ktp/{profil:id}', [DashboardProfileController::class, 'verifikasi']);
});

// Pemerintah
Route::group([
    'middleware' => 'pemerintah', 'prefix' => 'pemerintah'
], function () {
    Route::resource('pelayanan', PelayananPemerintahController::class)->except('show');
    Route::resource('umkm', UMKMPemerintahController::class)->except(['store', 'create']);
    Route::resource('pendaftaran', PemerintahPendaftaranController::class)->except(['create', 'store', 'show']);
});
