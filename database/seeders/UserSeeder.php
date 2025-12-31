<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data 4 Anggota Kelompok
        $anggota = [
            [
                'name'     => 'Valdy S.P. Simbolon',
                'email'    => 'valdy@gmail.com',
                'password' => Hash::make('admin123'), // Password untuk login
            ],
            [
                'name'     => 'Rouli Sibarani',
                'email'    => 'rouli@gmail.com',
                'password' => Hash::make('admin123'),
            ],
            [
                'name'     => 'Yenti Sihotang',
                'email'    => 'yenti@gmail.com',
                'password' => Hash::make('admin123'),
            ],
            [
                'name'     => 'Gresia Maryance Batuara',
                'email'    => 'gresia@gmail.com',
                'password' => Hash::make('admin123'),
            ],
        ];

        // Memasukkan data ke tabel users
        foreach ($anggota as $user) {
            User::create($user);
        }
    }
}