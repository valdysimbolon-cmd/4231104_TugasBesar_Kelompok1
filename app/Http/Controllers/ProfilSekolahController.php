<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilSekolahController extends Controller
{
    public function index() {
        $profil = Profil::first();
        $struktur = StrukturOrganisasi::all(); // Tambahkan baris ini
        return view('admin.profil.index', compact('profil', 'struktur')); // Tambahkan 'struktur'
    }

// ... bagian atas sama ...

    public function store(Request $request) {
        $request->validate([
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tugas_tanggung_jawab' => 'required', // Tambahkan validasi
            'struktur_organisasi' => 'required|image|max:2048'
        ]);

        $nama_file = time().'_'.$request->struktur_organisasi->getClientOriginalName();
        $request->struktur_organisasi->move(public_path('Admin/img/profil'), $nama_file);

        Profil::create([
            'sejarah' => $request->sejarah,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tugas_tanggung_jawab' => $request->tugas_tanggung_jawab,
            'struktur_organisasi' => $nama_file
        ]);

        return redirect()->route('profil-sekolah.index')->with('success', 'Profil Sekolah Berhasil Disimpan!');
    }

    public function update(Request $request, $id) {
        $profil = Profil::findOrFail($id);
        
        // Tambahkan validasi di sini juga
        $request->validate([
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tugas_tanggung_jawab' => 'required',
        ]);

        $nama_file = $profil->struktur_organisasi;

        if ($request->hasFile('struktur_organisasi')) {
            File::delete(public_path('Admin/img/profil/'.$profil->struktur_organisasi));
            $nama_file = time().'_'.$request->struktur_organisasi->getClientOriginalName();
            $request->struktur_organisasi->move(public_path('Admin/img/profil'), $nama_file);
        }

        $profil->update([
            'sejarah' => $request->sejarah,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tugas_tanggung_jawab' => $request->tugas_tanggung_jawab,
            'struktur_organisasi' => $nama_file
        ]);

        return redirect()->route('profil-sekolah.index')->with('success', 'Profil Berhasil Diperbarui!');
    }
}