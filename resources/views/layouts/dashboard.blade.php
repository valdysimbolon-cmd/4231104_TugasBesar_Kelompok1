@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h4 mb-0 text-gray-900 font-weight-bold">Dashboard Overview</h1>
            <p class="small text-muted mb-0">Manajemen Konten SMP Budi Mulia Pangururan</p>
        </div>
        <a href="{{ route('guest.index') }}" class="btn btn-sm btn-white border shadow-sm px-4 py-2 rounded-pill" target="_blank" style="background: white; font-weight: 600;">
            <i class="fas fa-external-link-alt fa-sm text-primary mr-2"></i> Lihat Website
        </a>
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow-sm h-100 py-3 border-0 border-left-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Berita & Kegiatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_berita }} Konten</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow-sm h-100 py-3 border-0 border-left-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengumuman Resmi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_pengumuman }} Berkas</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bullhorn fa-2x text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card shadow-sm h-100 py-3 border-0 border-left-info">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Koleksi Galeri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_galeri }} Foto</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 20px;">
        <div class="card-body p-0">
            <div class="row no-gutters">
                <div class="col-lg-12 p-5 text-center bg-white">
                    <div class="mb-4">
                        <div class="display-4 text-primary font-weight-bold mb-2" style="font-size: 2.5rem;">Selamat Datang!</div>
                        <h4 class="text-gray-800 font-weight-light">{{ Auth::user()->name }}</h4>
                    </div>
                    <p class="text-muted mx-auto mb-5" style="max-width: 750px; font-size: 1.05rem; line-height: 1.8;">
                        Anda memiliki kendali penuh untuk memperbarui informasi sekolah secara real-time. Gunakan menu di bawah untuk melakukan pembaruan profil atau membagikan kabar terbaru kepada siswa dan orang tua.
                    </p>
                    <div class="d-flex justify-content-center flex-wrap" style="gap: 1.2rem;">
                        <a href="{{ route('profil-sekolah.index') }}" class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm border-0" style="font-weight: 600; font-size: 0.9rem;">
                            <i class="fas fa-university mr-2"></i> Profil Sekolah
                        </a>
                        <a href="{{ route('berita.index') }}" class="btn btn-outline-primary btn-lg px-5 rounded-pill" style="font-weight: 600; font-size: 0.9rem;">
                            <i class="fas fa-newspaper mr-2"></i> Kelola Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection