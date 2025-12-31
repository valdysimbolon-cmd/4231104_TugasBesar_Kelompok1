@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Berita Baru</h1>

            <div class="card shadow mb-4">
                <div class="card-body">
                    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Judul Berita</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar (Wajib)</label>
                    <input type="file" name="gambar" class="form-control-file" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Berita</button>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection