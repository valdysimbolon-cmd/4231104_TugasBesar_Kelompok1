@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Pengumuman</h1>

    <div class="card shadow mb-4 col-lg-8">
        <div class="card-body">
            <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-3">
                    <label>Judul Pengumuman</label>
                    <input type="text" name="judul" class="form-control" value="{{ $pengumuman->judul }}" required>
                </div>

                <div class="form-group mb-3">
                    <label>Isi Detail</label>
                    <textarea name="isi_pengumuman" class="form-control" rows="4" required>{{ $pengumuman->isi_pengumuman }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>File Saat Ini:</label> <br>
                    <span class="badge badge-info p-2">{{ $pengumuman->file_upload }}</span>
                    <br><br>
                    <label>Ganti File (Biarkan kosong jika tidak ingin diubah)</label>
                    <input type="file" name="file_upload" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Update Pengumuman</button>
                <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection