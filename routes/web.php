<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
<<<<<<< HEAD
use App\Http\Controllers\StrukturOrganisasiController;// <--- TAMBAHKAN INI
=======
>>>>>>> 0ff7f5b3f8c84845039b72cfc86e80d7f04b8140

/*
|--------------------------------------------------------------------------
| GUEST ROUTES (FRONTEND)
|--------------------------------------------------------------------------
*/
Route::get('/', [GuestController::class, 'index'])->name('guest.index');

// Halaman semua berita (UX: tombol "Lihat Semua Berita")
Route::get('/berita', [GuestController::class, 'semuaBerita'])->name('berita.index');

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login-process', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (WAJIB LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('layouts.dashboard');
    })->name('dashboard');

    Route::resource('profil-sekolah', ProfilSekolahController::class);
    Route::resource('berita', BeritaController::class); // ADMIN
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('galeri', GaleriController::class);
<<<<<<< HEAD
    Route::resource('struktur-organisasi', StrukturOrganisasiController::class);
    // PERBAIKAN: Gunakan 'K' besar pada KontakController
=======
>>>>>>> 0ff7f5b3f8c84845039b72cfc86e80d7f04b8140
    Route::resource('kontak', KontakController::class);
});
