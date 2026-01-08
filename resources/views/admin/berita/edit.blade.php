@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Edit Konten Berita</h2>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-left-primary">
        <div class="card-body">
            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                
                <div class="form-group mb-4">
                    <label class="font-weight-bold">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold">Isi Berita Lengkap</label>
                    <textarea name="isi" class="form-control" rows="8" required>{{ $berita->isi }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-primary">Link Eksternal (Instagram / YouTube)</label>
                    <input type="url" name="link_berita" class="form-control" value="{{ $berita->link_berita }}" placeholder="https://...">
                </div>

                <div class="row align-items-center mb-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Ganti Gambar Berita</label>
                            <input type="file" name="gambar" class="form-control" id="customFile">
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img id="preview" src="{{ asset('Admin/img/berita/' . $berita->gambar) }}" class="img-fluid rounded shadow-sm" style="max-height: 150px; border: 2px solid #ddd;">
                    </div>
                </div>

                <hr>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary px-5 shadow-sm">
                        <i class="fas fa-save mr-2"></i> Perbarui Berita
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('customFile').onchange = function (evt) {
        const [file] = this.files
        if (file) {
            document.getElementById('preview').src = URL.createObjectURL(file)
        }
    }
</script>
@endsection