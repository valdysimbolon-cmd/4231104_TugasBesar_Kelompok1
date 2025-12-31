@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Pengumuman Baru</h1>

    <div class="card shadow mb-4 col-lg-8">
        <div class="card-body">
            <form action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label>Judul Pengumuman</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Isi Detail Pengumuman</label>
                    <textarea name="isi_pengumuman" class="form-control" rows="4" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label>Upload File (PDF/Doc) - Wajib</label>
                    <input type="file" name="file_upload" class="form-control" required>
                    <small class="text-danger">*Maksimal 5MB (PDF/Word)</small>
                </div>
                <button type="submit" class="btn btn-primary">Publikasikan</button>
                <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection