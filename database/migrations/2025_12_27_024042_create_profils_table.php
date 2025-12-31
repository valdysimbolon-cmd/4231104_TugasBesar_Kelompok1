<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah')->default('SMP Budi Mulia Pangururan');
            $table->longText('sejarah'); // Menggunakan longText untuk narasi sejarah yang panjang
            $table->text('visi');
            $table->text('misi');
            $table->string('struktur_organisasi'); // Untuk menyimpan nama file gambar struktur
            $table->text('tugas_tanggung_jawab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};