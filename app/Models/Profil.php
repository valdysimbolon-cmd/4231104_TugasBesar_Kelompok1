<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    // WAJIB: Daftarkan semua kolom agar bisa disimpan oleh Controller
    protected $fillable = [
        'sejarah', 
        'visi', 
        'misi', 
        'struktur_organisasi', 
        'tugas_tanggung_jawab'
    ];
}