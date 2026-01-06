<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PengumumanController extends Controller
{
    public function index() {
        $pengumumans = Pengumuman::latest()->get();
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    public function create() {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required',
            'isi_pengumuman' => 'required',
            'file_upload' => 'required|mimes:pdf,doc,docx,zip,jpg,jpeg,png|max:5000',
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

    public function edit($id) {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'judul' => 'required',
            'isi_pengumuman' => 'required',
            'file_upload' => 'nullable|mimes:pdf,doc,docx,zip,jpg,jpeg,png|max:5000',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $nama_file = $pengumuman->file_upload;

        if ($request->hasFile('file_upload')) {
            if (File::exists(public_path('Admin/files/pengumuman/' . $pengumuman->file_upload))) {
                File::delete(public_path('Admin/files/pengumuman/' . $pengumuman->file_upload));
            }
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

    public function destroy($id) {
        $data = Pengumuman::findOrFail($id);
        if (File::exists(public_path('Admin/files/pengumuman/' . $data->file_upload))) {
            File::delete(public_path('Admin/files/pengumuman/' . $data->file_upload));
        }
        $data->delete();
        return redirect()->back()->with('success', 'Pengumuman berhasil dihapus.');
    }
}