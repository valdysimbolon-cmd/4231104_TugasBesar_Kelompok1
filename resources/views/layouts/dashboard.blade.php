@extends('layouts.admin') {{-- Memanggil template SB Admin 2 --}}

@section('content')
<div class="container-fluid">

    <!-- Header Sederhana -->
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Dashboard</h1>
        <p class="text-muted">Selamat datang kembali di Panel Admin SMP Budi Mulia Pangururan.</p>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Card Utama -->
            <div class="card shadow border-0 mb-4" style="border-radius: 15px;">
                <div class="card-body p-5 text-center">
                    <!-- Ilustrasi Sederhana -->
                    <img src="{{ asset('Admin/img/undraw_posting_photo.svg') }}" 
                         alt="Welcome" 
                         class="img-fluid mb-4" 
                         style="max-width: 250px;">
                    
                    <h2 class="text-dark font-weight-bold">Halo, Administrator!</h2>
                    <p class="text-muted mx-auto" style="max-width: 600px;">
                        Anda masuk ke sistem manajemen konten. Di sini Anda bisa memperbarui profil sekolah, mengunggah berita terbaru, hingga mengatur pengumuman untuk siswa dan orang tua.
                    </p>
                    
                    <hr class="my-4" style="max-width: 100px; border-top: 3px solid #4e73df; border-radius: 10px;">

                    <!-- Tombol Navigasi Cepat -->
                    <div class="d-flex justify-content-center flex-wrap" style="gap: 15px;">
                        <!-- Gunakan # dulu agar tidak error -->
                        <a href="#" class="btn btn-primary px-4 shadow-sm">
                            <i class="fas fa-school mr-2"></i> Edit Profil
                        </a>
                        <a href="#" class="btn btn-outline-primary px-4 shadow-sm">
                            <i class="fas fa-newspaper mr-2"></i> Tulis Berita
                        </a>
                        <a href="/" target="_blank" class="btn btn-light px-4 border shadow-sm">
                            <i class="fas fa-external-link-alt mr-2"></i> Lihat Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection