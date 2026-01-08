<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilSekolahController extends Controller
{
    // --- READ: Menampilkan profil dan struktur organisasi ---
    public function index()
    {
        $profil = Profil::first();
        $struktur = StrukturOrganisasi::all(); 
        return view('admin.profil.edit', compact('profil', 'struktur'));
    }

    // --- VIEW: Halaman pengeditan profil sekolah ---
    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        $dataStaf = StrukturOrganisasi::all();
        return view('admin.profil.index', compact('profil', 'dataStaf'));
    }

    // --- UPDATE: Sinkronisasi data profil dan tabel dinamis staf ---
    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        $request->validate([
            'sejarah' => 'required',
            'visi'    => 'required',
            'misi'    => 'required',
            'tugas_tanggung_jawab' => 'required',
            'struktur_organisasi'  => 'nullable|image|max:2048'
        ]);

        // Pengelolaan Gambar Bagan Struktur
        $nama_file = $profil->struktur_organisasi;
        if ($request->hasFile('struktur_organisasi')) {
            if ($profil->struktur_organisasi && File::exists(public_path('Admin/img/profil/' . $profil->struktur_organisasi))) {
                File::delete(public_path('Admin/img/profil/' . $profil->struktur_organisasi));
            }
            $nama_file = time() . '_' . $request->struktur_organisasi->getClientOriginalName();
            $request->struktur_organisasi->move(public_path('Admin/img/profil'), $nama_file);
        }

        // 1. Update Informasi Utama Sekolah
        $profil->update([
            'sejarah' => $request->sejarah,
            'visi'    => $request->visi,
            'misi'    => $request->misi,
            'tugas_tanggung_jawab' => $request->tugas_tanggung_jawab,
            'struktur_organisasi'  => $nama_file
        ]);

        // 2. Update Struktur Organisasi (Logika Truncate & Re-insert)
        if ($request->has('jabatan')) {
            StrukturOrganisasi::truncate(); 
            foreach ($request->jabatan as $key => $j) {
                if (!empty($j) && !empty($request->nama[$key])) {
                    StrukturOrganisasi::create([
                        'jabatan' => $j,
                        'nama'    => $request->nama[$key],
                        'tugas'   => $request->tugas[$key] ?? '-'
                    ]);
                }
            }
        }

        return redirect()->route('profil-sekolah.index')->with('success', 'Profil Sekolah dan Struktur berhasil diperbarui!');
    }
}