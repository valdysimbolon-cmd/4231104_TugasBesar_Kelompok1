<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak; // Pastikan import model ini

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Data awal untuk tabel kontak
        Kontak::create([
            'email' => 'admin@smpbudimulia.sch.id',
            'no_telp' => '+62 812-xxxx-xxxx',
            'alamat' => 'Jl. Pelajar, Pangururan, Kabupaten Samosir, Sumatera Utara'
        ]);
        
        // Anda juga bisa menambahkan seeder untuk User Admin di sini jika belum ada
    }
}