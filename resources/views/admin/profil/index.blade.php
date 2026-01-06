@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kelola Profil Sekolah</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <!-- Jika data sudah ada, gunakan update. Jika kosong, gunakan store -->
            <form action="{{ $profil ? route('profil-sekolah.update', $profil->id) : route('profil-sekolah.store') }}" 
                  method="POST" enctype="multipart/form-data">
                @csrf
                @if($profil) @method('PUT') @endif

                <div class="form-group">
                    <label>Sejarah</label>
                    <textarea name="sejarah" class="form-control" rows="4" required>{{ $profil->sejarah ?? '' }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Visi</label>
                            <textarea name="visi" class="form-control" rows="3" required>{{ $profil->visi ?? '' }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Misi</label>
                            <textarea name="misi" class="form-control" rows="3" required>{{ $profil->misi ?? '' }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- BAGIAN YANG MENYEBABKAN ERROR TADI -->
                <div class="form-group">
                    <label>Tugas dan Tanggung Jawab Guru/Staf</label>
                    <textarea name="tugas_tanggung_jawab" class="form-control" rows="4" required placeholder="Masukkan daftar tugas dan tanggung jawab...">{{ $profil->tugas_tanggung_jawab ?? '' }}</textarea>
                </div>

                <div class="form-group">
                    <label>Gambar Struktur Organisasi</label>
                    @if($profil && $profil->struktur_organisasi)
                        <div class="mb-2">
                            <img src="{{ asset('Admin/img/profil/'.$profil->struktur_organisasi) }}" width="200" class="img-thumbnail">
                        </div>
                    @endif
                    <input type="file" name="struktur_organisasi" class="form-control-file">
                    <small class="text-muted">Format: JPG, PNG. Maksimal 2MB.</small>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan Profil
                </button>
            </form>
        </div>
    </div>
</div>
@endsection