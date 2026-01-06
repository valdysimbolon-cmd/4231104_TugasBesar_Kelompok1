<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Kontak;
use App\Models\StrukturOrganisasi;

class GuestController extends Controller
{
    // --- VIEW: Halaman Landing Page (Beranda) ---
    public function index()
    {
        // Mengambil data untuk disajikan di halaman utama
        $beritas = Berita::latest()->take(3)->get(); // Hanya tampilkan 3 berita terbaru
        $struktur = StrukturOrganisasi::all();
        $pengumumans = Pengumuman::latest()->get();
        $galeris = Galeri::latest()->get();
        $profil = Profil::first();
        $kontak = Kontak::first();

        return view('guest.index', compact(
            'beritas', 'pengumumans', 'galeris', 'profil', 'kontak', 'struktur'
        ));
    }

    // --- VIEW: Halaman daftar berita lengkap dengan pencarian ---
    public function semuaBerita(Request $request)
    {
        $query = Berita::query();

        // Logika fitur pencarian berita
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('isi', 'like', '%' . $request->search . '%');
        }

        $beritas = $query->latest()->paginate(6); // Pagination agar tampilan rapi
        return view('guest.semua-berita', compact('beritas'));
    }
}