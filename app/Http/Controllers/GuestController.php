<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Galeri;
use App\Models\Profil;
use App\Models\Kontak;
use App\Models\StrukturOrganisasi; // <--- TAMBAHKAN INI

class GuestController extends Controller
{
    public function index()
    {
        // 3 berita terbaru (UX + BONUS)
        $profil = Profil::first();
        $beritas = Berita::latest()->take(3)->get();

        // Mengambil data baris-baris Struktur Organisasi (untuk Tabel Tugas & Tanggung Jawab)
        $struktur = StrukturOrganisasi::all();

        // Data lainnya
        $pengumumans = Pengumuman::latest()->get();
        $galeris = Galeri::latest()->get();
        $profil = Profil::first();
        $kontak = Kontak::first();

        return view('guest.index', compact(
            'beritas',
            'pengumumans',
            'galeris',
            'profil',
            'kontak',
            'struktur' // <--- PASTIKAN INI DIKIRIM KE VIEW
        ));
    }

    /**
     * Halaman Semua Berita + Search + Pagination
     */
    public function semuaBerita(Request $request)
    {
        $query = Berita::query();

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('isi', 'like', '%' . $request->search . '%');
            });
        }

        // Pagination 6 berita per halaman
        $beritas = $query->latest()->paginate(6);

        return view('guest.semua-berita', compact('beritas'));
    }
}