<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Galeri;

/*
|--------------------------------------------------------------------------
| ROUTES HALAMAN PENGUNJUNG (GUEST)
|--------------------------------------------------------------------------
*/
Route::get('/', [GuestController::class, 'index'])->name('guest.index');
Route::get('/berita', [GuestController::class, 'semuaBerita'])->name('berita.index');

/*
|--------------------------------------------------------------------------
| ROUTES SISTEM AUTENTIKASI (LOGIN & LOGOUT)
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login-process', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ROUTES AREA ADMINISTRATOR (PROTECTED BY MIDDLEWARE)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // --- DASHBOARD: Ringkasan Statistik Data ---
    Route::get('/dashboard', function () {
        return view('layouts.dashboard', [
            'jml_berita' => Berita::count(),
            'jml_pengumuman' => Pengumuman::count(),
            'jml_galeri' => Galeri::count(),
        ]);
    })->name('dashboard');

    // --- MANAJEMEN AKUN: Pengaturan Profil Admin ---
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // --- MANAJEMEN KONTEN: Profil Sekolah, Berita, Pengumuman, Galeri, Kontak ---
    Route::resource('profil-sekolah', ProfilSekolahController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('kontak', KontakController::class);
});