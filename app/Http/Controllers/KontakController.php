<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    // Tampilkan halaman edit kontak
    public function index()
    {
        // Mengambil data pertama. Jika belum ada data, sistem tidak akan error.
        $kontak = Kontak::first();
        return view('admin.kontak.index', compact('kontak'));
    }

    // Proses simpan perubahan data kontak
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $kontak = Kontak::findOrFail($id);
        
        // Update data ke database
        $kontak->update([
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back()->with('success', 'Kontak sekolah berhasil diperbarui!');
    }
}