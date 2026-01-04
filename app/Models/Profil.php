<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'sejarah', 
        'visi', 
        'misi', 
        'tugas_tanggung_jawab',
        'struktur_organisasi'
    ];
}