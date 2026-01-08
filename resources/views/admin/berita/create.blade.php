@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Tulis Berita Baru</h2>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-left-primary">
        <div class="card-header bg-white py-3 border-bottom">
            <h6 class="m-0 font-weight-bold text-primary">Form Informasi Berita & Kegiatan</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Judul Berita / Kegiatan</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan judul..." required>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Isi Berita Lengkap</label>
                    <textarea name="isi" class="form-control" rows="8" placeholder="Tuliskan detail berita..." required></textarea>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Link Eksternal (Medsos / Video)</label>
                    <input type="url" name="link_berita" class="form-control" placeholder="https://...">
                </div>

                <div class="row mb-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-dark">Unggah Gambar Utama</label>
                            <input type="file" name="gambar" class="form-control" id="customFile" required>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                         <img id="preview" src="https://via.placeholder.com/300x150?text=Preview" class="img-fluid rounded shadow-sm border" style="max-height: 150px;">
                    </div>
                </div>

                <hr>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary px-5 shadow-sm">
                        <i class="fas fa-paper-plane mr-2"></i> Publikasikan Berita
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