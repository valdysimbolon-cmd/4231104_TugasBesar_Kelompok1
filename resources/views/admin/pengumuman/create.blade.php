@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Tulis Pengumuman Baru</h2>
        <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-left-info">
        <div class="card-header bg-white py-3 border-bottom">
            <h6 class="m-0 font-weight-bold text-info">Form Informasi Pengumuman Baru</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Judul Pengumuman</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan judul..." value="{{ old('judul') }}" required>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Isi Detail Pengumuman</label>
                    <textarea name="isi_pengumuman" class="form-control @error('isi_pengumuman') is-invalid @enderror" rows="8" placeholder="Tuliskan detail pengumuman..." required>{{ old('isi_pengumuman') }}</textarea>
                    @error('isi_pengumuman')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Upload Berkas (PDF/Doc/JPG)</label>
                    <div class="custom-file">
                        <input type="file" name="file_upload" class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Pilih file pengumuman...</label>
                    </div>
                    <small class="text-danger mt-2 d-block">*Maksimal 5MB (PDF/Word/Gambar)</small>
                </div>

                <hr>

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-info px-5 shadow-sm" style="background-color: #3bc3d1; border: none;">
                        <i class="fas fa-paper-plane mr-2"></i> Publikasikan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('customFile').onchange = function () {
        let fileName = this.files[0].name;
        this.nextElementSibling.innerText = fileName;
    }
</script>
@endsection