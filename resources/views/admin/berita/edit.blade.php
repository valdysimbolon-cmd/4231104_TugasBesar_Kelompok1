@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Edit Berita</h2>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow-sm border-left-primary">
        <div class="card-body">
            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                
                <div class="form-group mb-4">
                    <label class="font-weight-bold">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold">Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="6" required>{{ $berita->isi }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold">Link Eksternal (Instagram / YouTube)</label>
                    <input type="url" name="link_berita" class="form-control" value="{{ $berita->link_berita }}">
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Ganti Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="customFile">
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img id="preview" src="{{ asset('Admin/img/berita/' . $berita->gambar) }}" class="img-fluid rounded" style="max-height: 150px;">
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary px-4">Update Berita</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection