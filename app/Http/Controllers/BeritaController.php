<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    // 1. Menampilkan Daftar Berita
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    // 2. Menampilkan Form Tambah Berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // 3. Menyimpan Berita Baru ke Database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Syarat wajib modul
        ]);

        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('Admin/img/berita'), $nama_file);

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $nama_file,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diterbitkan!');
    }

    // 4. Menampilkan Halaman Edit
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    // 5. Memperbarui Data Berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048', // Opsional saat edit
        ]);

        $berita = Berita::findOrFail($id);
        $nama_file = $berita->gambar;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama agar tidak menumpuk di hosting
            File::delete(public_path('Admin/img/berita/' . $berita->gambar));

            // Upload gambar baru
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('Admin/img/berita'), $nama_file);
        }

        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $nama_file,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    // 6. Menghapus Berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Hapus file fisik gambar dari folder public
        File::delete(public_path('Admin/img/berita/' . $berita->gambar));

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}