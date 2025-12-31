<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PengumumanController extends Controller
{
    // 1. Menampilkan Daftar Pengumuman
    public function index() {
        $pengumumans = Pengumuman::latest()->get();
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    // 2. Menampilkan Form Tambah
    public function create() {
        return view('admin.pengumuman.create');
    }

    // 3. Menyimpan Pengumuman Baru
    public function store(Request $request) {
        $request->validate([
            'judul' => 'required',
            'isi_pengumuman' => 'required',
            'file_upload' => 'required|mimes:pdf,doc,docx,zip|max:5000', // Syarat wajib modul
        ]);

        $file = $request->file('file_upload');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('Admin/files/pengumuman'), $nama_file);

        Pengumuman::create([
            'judul' => $request->judul,
            'isi_pengumuman' => $request->isi_pengumuman,
            'file_upload' => $nama_file,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dipublikasikan!');
    }

    // 4. Menampilkan Form Edit
    public function edit($id) {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    // 5. Memperbarui Data Pengumuman
    public function update(Request $request, $id) {
        $request->validate([
            'judul' => 'required',
            'isi_pengumuman' => 'required',
            'file_upload' => 'mimes:pdf,doc,docx,zip|max:5000', // Opsional saat update
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $nama_file = $pengumuman->file_upload;

        // Logika jika admin mengganti file dokumen
        if ($request->hasFile('file_upload')) {
            // Hapus file lama dari folder agar tidak menumpuk
            File::delete(public_path('Admin/files/pengumuman/' . $pengumuman->file_upload));

            $file = $request->file('file_upload');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('Admin/files/pengumuman'), $nama_file);
        }

        $pengumuman->update([
            'judul' => $request->judul,
            'isi_pengumuman' => $request->isi_pengumuman,
            'file_upload' => $nama_file,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui!');
    }

    // 6. Menghapus Pengumuman
    public function destroy($id) {
        $data = Pengumuman::findOrFail($id);
        // Hapus file fisik dari folder public sebelum menghapus data di database
        File::delete(public_path('Admin/files/pengumuman/' . $data->file_upload));
        $data->delete();
        return redirect()->back()->with('success', 'Pengumuman berhasil dihapus.');
    }
}