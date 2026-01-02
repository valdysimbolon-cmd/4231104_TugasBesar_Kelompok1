<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Galeri;
use App\Models\Profil; 
use App\Models\Kontak;

class GuestController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $beritas = Berita::latest()->get();
        $pengumumans = Pengumuman::latest()->get();
        $galeris = Galeri::latest()->get();
        $profil = Profil::first(); // Data Profil Sekolah
        $kontak = Kontak::first();       // Data Kontak Sekolah

        // Kirim semua variabel ke view guest/index
        return view('guest.index', compact('beritas', 'pengumumans', 'galeris', 'profil', 'kontak'));
    }
}