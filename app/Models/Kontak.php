<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    // Tentukan kolom mana saja yang boleh diisi secara massal
    protected $fillable = [
        'email',
        'no_telp',
        'alamat'
    ];
}