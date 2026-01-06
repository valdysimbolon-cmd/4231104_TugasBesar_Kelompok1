@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Edit Pengumuman</h2>
        <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow-sm border-left-info">
        <div class="card-body">
            <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-4">
                    <label>Judul Pengumuman</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul', $pengumuman->judul) }}" required>
                </div>

                <div class="form-group mb-4">
                    <label>Isi Detail</label>
                    <textarea name="isi_pengumuman" class="form-control" rows="6" required>{{ old('isi_pengumuman', $pengumuman->isi_pengumuman) }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label>Ganti File (Opsional)</label>
                    <div class="custom-file">
                        <input type="file" name="file_upload" class="custom-file-input" id="customFile">
                        <label class="custom-file-label">Pilih file baru jika ingin mengganti...</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-info" style="background-color: #3bc3d1; border: none;">Update Pengumuman</button>
            </form>
        </div>
    </div>
</div>
@endsection