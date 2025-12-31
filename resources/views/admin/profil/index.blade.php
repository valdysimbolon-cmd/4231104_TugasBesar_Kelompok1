@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Judul Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Kelola Profil Sekolah</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4 border-left-primary">
        <div class="card-header py-3 bg-white">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-edit mr-1"></i> Form Informasi Profil Sekolah
            </h6>
        </div>
        <div class="card-body">
            
            @if(!$profil)
                <div class="alert alert-info border-0 shadow-sm">
                    <i class="fas fa-info-circle mr-2"></i> Data profil sekolah masih kosong. Silakan lengkapi form di bawah.
                </div>
                <form action="{{ route('profil-sekolah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
            @else
                <form action="{{ route('profil-sekolah.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            @endif

                <!-- Bagian Sejarah -->
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Sejarah SMP Budi Mulia Pangururan</label>
                    <textarea name="sejarah" class="form-control shadow-sm" rows="5" required placeholder="Tuliskan sejarah singkat sekolah...">{{ $profil ? $profil->sejarah : '' }}</textarea>
                </div>

                <div class="row mb-4">
                    <!-- Bagian Visi -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-dark">Visi</label>
                            <textarea name="visi" class="form-control shadow-sm" rows="4" required placeholder="Visi sekolah...">{{ $profil ? $profil->visi : '' }}</textarea>
                        </div>
                    </div>
                    <!-- Bagian Misi -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-dark">Misi</label>
                            <textarea name="misi" class="form-control shadow-sm" rows="4" required placeholder="Misi sekolah...">{{ $profil ? $profil->misi : '' }}</textarea>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <!-- Bagian Gambar Struktur Organisasi -->
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <div class="form-group">
                            <label class="font-weight-bold text-dark d-block text-left">Struktur Organisasi (Gambar)</label>
                            <div class="mb-3">
                                @php
                                    $imagePath = ($profil && $profil->struktur_organisasi) 
                                                 ? asset('Admin/img/profil/'.$profil->struktur_organisasi) 
                                                 : asset('Admin/img/no-image.jpg');
                                @endphp
                                <img id="preview" src="{{ $imagePath }}" class="img-thumbnail shadow-sm" 
                                     style="max-height: 350px; width: 100%; object-fit: contain; background-color: #f8f9fc;">
                            </div>
                            <div class="custom-file text-left">
                                <input type="file" name="struktur_organisasi" class="custom-file-input" id="imgInput" {{ !$profil ? 'required' : '' }}>
                                <label class="custom-file-label" for="imgInput">Pilih file gambar baru...</label>
                            </div>
                            <small class="text-muted mt-2 d-block">Saran: Gunakan gambar dengan rasio lebar (Landscape) agar terlihat rapi.</small>
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="text-right mt-5 border-top pt-3">
                    <button type="submit" class="btn btn-primary btn-icon-split shadow-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">{{ !$profil ? 'Simpan Profil Sekolah' : 'Simpan Perubahan' }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script Preview Gambar -->
<script>
    document.getElementById('imgInput').onchange = function (evt) {
        const [file] = this.files
        if (file) {
            document.getElementById('preview').src = URL.createObjectURL(file)
            let fileName = this.files[0].name;
            this.nextElementSibling.innerText = fileName;
        }
    }
</script>
@endsection