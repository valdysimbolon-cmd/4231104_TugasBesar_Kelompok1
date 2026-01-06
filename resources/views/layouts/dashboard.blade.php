@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Dashboard</h1>
    </div>

    <!-- Kotak Statistik -->
    <div class="row mb-4">
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Berita</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_berita }} Data</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengumuman</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_pengumuman }} Data</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Galeri</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_galeri }} Foto</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Card -->
    <div class="card shadow border-0 p-5 text-center" style="border-radius: 15px;">
        <h2 class="text-dark font-weight-bold">Halo, {{ Auth::user()->name }}!</h2>
        <p class="text-muted">Selamat datang di Panel Manajemen Konten SMP Budi Mulia Pangururan.</p>
        <div class="mt-3">
            <a href="{{ route('profil-sekolah.index') }}" class="btn btn-primary px-4 shadow-sm">Edit Profil</a>
            <a href="{{ route('berita.index') }}" class="btn btn-outline-primary px-4 shadow-sm">Tulis Berita</a>
        </div>
    </div>
</div>
@endsection