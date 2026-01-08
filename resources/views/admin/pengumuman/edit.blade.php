@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Edit Pengumuman</h2>
        <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-left-info">
        <div class="card-header bg-white py-3 border-bottom">
            <h6 class="m-0 font-weight-bold text-info">Form Edit Informasi Pengumuman</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Judul Pengumuman</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul', $pengumuman->judul) }}" required>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Isi Detail</label>
                    <textarea name="isi_pengumuman" class="form-control" rows="8" required>{{ old('isi_pengumuman', $pengumuman->isi_pengumuman) }}</textarea>
                </div>

                <div class="row align-items-center mb-4">
                    <div class="col-lg-12 mb-3">
                        <label class="font-weight-bold text-dark">File Saat Ini:</label>
                        <div class="p-2 border rounded bg-light">
                            <span class="text-info small font-weight-bold">
                                <i class="fas fa-file-alt mr-1"></i> {{ $pengumuman->file_upload }}
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="font-weight-bold text-dark">Ganti File (Opsional)</label>
                        <div class="custom-file">
                            <input type="file" name="file_upload" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Pilih file baru...</label>
                        </div>
                        <small class="text-muted mt-2 d-block">*Biarkan kosong jika tidak ingin mengubah file.</small>
                    </div>
                </div>

                <hr>

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-info px-5 shadow-sm" style="background-color: #3bc3d1; border: none;">
                        <i class="fas fa-save mr-2"></i> Perbarui Data
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