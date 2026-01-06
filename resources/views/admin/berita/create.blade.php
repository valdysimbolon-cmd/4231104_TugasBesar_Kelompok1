@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Manajemen Berita & Kegiatan</h2>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-left-primary">
        <div class="card-header bg-white py-3 border-bottom">
            <h6 class="m-0 font-weight-bold text-primary">Form Informasi Berita Baru</h6>
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
                    <textarea name="isi" class="form-control" rows="6" required></textarea>
                </div>

                <!-- INPUT LINK BARU -->
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Link Eksternal (Instagram / Video YouTube)</label>
                    <input type="url" name="link_berita" class="form-control" placeholder="https://www.instagram.com/p/...">
                    <small class="text-muted">Opsional: Isi jika ingin tombol "Selengkapnya" mengarah ke medsos.</small>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-dark">Gambar Utama Berita</label>
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label">Pilih file...</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center border-left">
                         <img id="preview" src="https://via.placeholder.com/300x150?text=Preview" class="img-fluid rounded shadow-sm" style="max-height: 150px;">
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">Simpan Berita</button>
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
            this.nextElementSibling.innerText = file.name
        }
    }
</script>
@endsection