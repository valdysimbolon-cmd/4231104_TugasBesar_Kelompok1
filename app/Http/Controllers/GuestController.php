<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; 
use App\Models\Pengumuman;
use App\Models\Profil;

class GuestController extends Controller
{
    public function index()
    {
        // 1. Ambil data dari database
        $beritas = Berita::latest()->get(); // Mengambil semua berita terbaru
        $pengumumans = Pengumuman::latest()->get(); // Mengambil semua pengumuman
        $profil = Profil::first(); // Mengambil baris pertama data profil

        // 2. Kirim data ke view (pastikan nama variabel di compact sama dengan di Blade)
        return view('guest.index', compact('beritas', 'pengumumans', 'profil'));
    }
}