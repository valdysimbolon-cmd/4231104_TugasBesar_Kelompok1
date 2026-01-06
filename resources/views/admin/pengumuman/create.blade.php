@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Manajemen Pengumuman</h2>
        <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow-sm border-left-info">
        <div class="card-header bg-white py-3 border-bottom">
            <h6 class="m-0 font-weight-bold text-info">Form Informasi Pengumuman Baru</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label>Judul Pengumuman</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required>
                </div>

                <div class="form-group mb-4">
                    <label>Isi Detail Pengumuman</label>
                    <textarea name="isi_pengumuman" class="form-control @error('isi_pengumuman') is-invalid @enderror" rows="6" required>{{ old('isi_pengumuman') }}</textarea>
                    @error('isi_pengumuman')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label>Upload File (PDF/Doc/JPG)</label>
                    <div class="custom-file">
                        <input type="file" name="file_upload" class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Pilih file...</label>
                    </div>
                    <small class="text-danger">*Maksimal 5MB (PDF/Word/Gambar)</small>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button type="reset" class="btn btn-light mr-2">Batal</button>
                    <button type="submit" class="btn btn-info px-4" style="background-color: #3bc3d1; border: none;">Publikasikan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('customFile').onchange = function () {
        this.nextElementSibling.innerText = this.files[0].name;
    }
</script>
@endsection