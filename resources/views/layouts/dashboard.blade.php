@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Dashboard</h1>
        <p class="text-muted">Selamat datang kembali di Panel Admin SMP Budi Mulia Pangururan.</p>
    </div>

    <!-- Row Statistik (Kotak Jumlah Data) -->
    <div class="row mb-4">
        <!-- Kotak Berita -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 border-0">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Berita</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_berita }} Konten</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak Pengumuman -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 border-0">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengumuman Aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_pengumuman }} Berkas</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kotak Galeri -->
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2 border-0">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Koleksi Galeri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_galeri }} Foto</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row Welcome Card -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow border-0 mb-4" style="border-radius: 15px;">
                <div class="card-body p-5 text-center">
                    <img src="{{ asset('Admin/img/undraw_posting_photo.svg') }}" 
                         alt="Welcome" 
                         class="img-fluid mb-4" 
                         style="max-width: 200px;">
                    
                    <!-- Menampilkan Nama Admin Secara Dinamis -->
                    <h2 class="text-dark font-weight-bold">Halo, {{ Auth::user()->name }}!</h2>
                    <p class="text-muted mx-auto" style="max-width: 600px;">
                        Anda masuk ke sistem manajemen konten. Di sini Anda bisa memperbarui profil sekolah, mengunggah berita terbaru, hingga mengatur pengumuman untuk siswa dan orang tua.
                    </p>
                    
                    <hr class="my-4" style="max-width: 100px; border-top: 3px solid #4e73df; border-radius: 10px;">

                    <!-- Tombol Navigasi Cepat (Sudah Dihubungkan) -->
                    <div class="d-flex justify-content-center flex-wrap" style="gap: 15px;">
                        <a href="{{ route('profil-sekolah.index') }}" class="btn btn-primary px-4 shadow-sm">
                            <i class="fas fa-school mr-2"></i> Edit Profil Sekolah
                        </a>
                        <a href="{{ route('berita.index') }}" class="btn btn-outline-primary px-4 shadow-sm">
                            <i class="fas fa-newspaper mr-2"></i> Kelola Berita
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