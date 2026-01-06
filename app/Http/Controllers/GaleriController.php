<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // TAMPILKAN DAFTAR (READ)
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    // SIMPAN DATA BARU (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'judul_kegiatan' => 'required|string|max:255',
            'foto'           => 'required|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('Admin/img/galeri'), $nama_file);

            Galeri::create([
                'judul_kegiatan' => $request->judul_kegiatan,
                'foto'           => $nama_file,
            ]);

            return redirect()->route('galeri.index')->with('success', 'Foto kegiatan berhasil ditambahkan!');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah foto.');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    // PROSES UPDATE DATA
    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul_kegiatan' => 'required|string|max:255',
            'foto'           => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // 1. Hapus foto lama jika ada
            $oldPath = public_path('Admin/img/galeri/' . $galeri->foto);
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }

            // 2. Upload foto baru
            $file = $request->file('foto');
            $nama_file = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('Admin/img/galeri'), $nama_file);
            
            // Simpan nama foto baru
            $galeri->foto = $nama_file;
        }

        $galeri->judul_kegiatan = $request->judul_kegiatan;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus file fisik dari folder public
        $path = public_path('Admin/img/galeri/' . $galeri->foto);
        if (file_exists($path)) {
            @unlink($path);
        }

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Foto berhasil dihapus!');
    }
}