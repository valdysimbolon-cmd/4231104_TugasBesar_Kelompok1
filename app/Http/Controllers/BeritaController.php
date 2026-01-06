<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    // --- READ: Daftar berita (terbaru di atas) ---
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    // --- VIEW: Form tambah berita ---
    public function create()
    {
        return view('admin.berita.create');
    }

    // --- CREATE: Simpan data berita dan upload gambar ---
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'link_berita' => 'nullable|url',
        ]);

        // Pengolahan file gambar
        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('Admin/img/berita'), $nama_file);

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $nama_file,
            'link_berita' => $request->link_berita,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diterbitkan!');
    }

    // --- VIEW: Form edit berita ---
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    // --- UPDATE: Perbarui data dan ganti gambar lama jika ada ---
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'link_berita' => 'nullable|url',
        ]);

        $berita = Berita::findOrFail($id);
        $nama_file = $berita->gambar;

        if ($request->hasFile('gambar')) {
            // Hapus file fisik gambar lama
            if (File::exists(public_path('Admin/img/berita/' . $berita->gambar))) {
                File::delete(public_path('Admin/img/berita/' . $berita->gambar));
            }

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('Admin/img/berita'), $nama_file);
        }

        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $nama_file,
            'link_berita' => $request->link_berita,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    // --- DELETE: Hapus data dan file gambar terkait ---
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if (File::exists(public_path('Admin/img/berita/' . $berita->gambar))) {
            File::delete(public_path('Admin/img/berita/' . $berita->gambar));
        }
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}