<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilSekolahController extends Controller
{
    // Tambahkan fungsi index agar tidak error saat redirect
    public function index()
    {
        $profil = Profil::first();
        return view('admin.profil.index', compact('profil'));
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);

        // Ambil data dari tabel StrukturOrganisasi
        $dataStaf = StrukturOrganisasi::all();

        return view('admin.profil.edit', compact('profil', 'dataStaf'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tugas_tanggung_jawab' => 'required',
            'struktur_organisasi' => 'required|image|max:2048'
        ]);

        $nama_file = time() . '_' . $request->struktur_organisasi->getClientOriginalName();
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

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);

        // 1. Validasi Input Profil Utama
        $request->validate([
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tugas_tanggung_jawab' => 'required',
        ]);

        // 2. Proses Upload Gambar (Jika ada ganti gambar)
        $nama_file = $profil->struktur_organisasi;
        if ($request->hasFile('struktur_organisasi')) {
            // Hapus gambar lama jika ada
            if (File::exists(public_path('Admin/img/profil/' . $profil->struktur_organisasi))) {
                File::delete(public_path('Admin/img/profil/' . $profil->struktur_organisasi));
            }
            $nama_file = time() . '_' . $request->struktur_organisasi->getClientOriginalName();
            $request->struktur_organisasi->move(public_path('Admin/img/profil'), $nama_file);
        }

        // 3. Update Data Profil Utama
        $profil->update([
            'sejarah' => $request->sejarah,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tugas_tanggung_jawab' => $request->tugas_tanggung_jawab,
            'struktur_organisasi' => $nama_file
        ]);

        // 4. PROSES UPDATE STRUKTUR ORGANISASI (BAGIAN PENTING)
        $jabatan = $request->jabatan;
        $nama = $request->nama;
        $tugas = $request->tugas;

        // Cek apakah ada inputan?
        if (!empty($jabatan)) {

            // --- PERBAIKAN UTAMA DI SINI ---
            // Kita HARUS hapus data lama dulu sebelum menyimpan yang baru
            // Agar data tidak duplikat (dobel-dobel)
            StrukturOrganisasi::truncate();
            // -------------------------------

            // SIMPAN DATA BARU
            foreach ($jabatan as $key => $j) {
                // Pastikan Jabatan dan Nama terisi
                if (!empty($j) && !empty($nama[$key])) {
                    StrukturOrganisasi::create([
                        'jabatan' => $j,
                        'nama' => $nama[$key], // Sesuai kolom database kamu 'nama'
                        'tugas' => $tugas[$key] ?? '-'
                    ]);
                }
            }
        }

        return redirect()->route('profil-sekolah.index')->with('success', 'Berhasil disimpan!');
    }
}