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
    /**
     * Halaman Home
     */
    public function index()
    {
        // 3 berita terbaru (UX + BONUS)
        $beritas = Berita::latest()->take(3)->get();

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
            'kontak'
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

        $beritas = $query->latest()->paginate(6);

        return view('guest.semua-berita', compact('beritas'));
    }
}
