<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Jalankan UserSeeder (INI YANG PENTING)
        $this->call(UserSeeder::class);

        // Data awal kontak sekolah
        Kontak::create([
            'email' => 'admin@smpbudimulia.sch.id',
            'no_telp' => '+62 812-xxxx-xxxx',
            'alamat' => 'Jl. Pelajar, Pangururan, Kabupaten Samosir, Sumatera Utara'
        ]);
    }
}
