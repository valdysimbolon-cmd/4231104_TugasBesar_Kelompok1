<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Tambahkan baris di bawah ini:
    protected $fillable = ['judul', 'isi', 'gambar', 'link_berita'];
}