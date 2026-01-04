<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    // 1️⃣ TAMPILKAN FORM + TABEL
    public function index()
    {
        $data = StrukturOrganisasi::all();
        return view('admin.struktur_organisasi.index', compact('data'));
    }

    // 2️⃣ SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'jabatan' => 'required',
            'nama'    => 'required',
            'tugas'   => 'required',
        ]);

        StrukturOrganisasi::create($request->all());

        return redirect()
            ->route('struktur-organisasi.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    // 3️⃣ HAPUS DATA
    public function destroy($id)
    {
        StrukturOrganisasi::findOrFail($id)->delete();

        return redirect()
            ->route('struktur-organisasi.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
