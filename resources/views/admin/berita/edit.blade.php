@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Berita</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Judul Berita</label>
                    <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
                </div>
                <div class="form-group">
                    <label>Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="5" required>{{ $berita->isi }}</textarea>
                </div>
                <div class="form-group">
                    <label>Gambar Saat Ini</label><br>
                    <img src="{{ asset('Admin/img/berita/'.$berita->gambar) }}" width="150" class="mb-2 img-thumbnail">
                    <br>
                    <label>Ganti Gambar (Biarkan kosong jika tidak ingin diubah)</label>
                    <input type="file" name="gambar" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-success">Update Berita</button>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection