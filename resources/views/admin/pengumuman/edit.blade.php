@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Header Page -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Manajemen Pengumuman</h2>
        <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-left-info">
        <!-- Header Form -->
        <div class="card-header bg-white py-3 border-bottom">
            <h6 class="m-0 font-weight-bold text-info">
                <i class="fas fa-edit mr-2"></i> Form Edit Informasi Pengumuman
            </h6>
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
                    <textarea name="isi" class="form-control" rows="6" required>{{ old('isi', $pengumuman->isi) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <label class="font-weight-bold text-dark">File Saat Ini:</label>
                        <div class="p-2 border rounded bg-light d-flex align-items-center justify-content-between">
                            <span class="text-info font-weight-bold small text-truncate mr-2">
                                <i class="fas fa-file-pdf mr-1"></i> {{ $pengumuman->file_upload }}
                            </span>
                            <a href="{{ asset('Admin/files/pengumuman/' . $pengumuman->file_upload) }}" target="_blank" class="btn btn-sm btn-outline-info">
                                <i class="fas fa-eye"></i> Lihat
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-dark">Ganti File (Opsional)</label>
                            <div class="custom-file">
                                <input type="file" name="file_upload" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih file baru...</label>
                            </div>
                            <small class="text-muted mt-2 d-block">*Biarkan kosong jika tidak ingin mengubah file.</small>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('pengumuman.index') }}" class="btn btn-light mr-2">Batal</a>
                    <button type="submit" class="btn btn-info px-4 shadow-sm" style="background-color: #3bc3d1; border: none;">
                        <i class="fas fa-save mr-2"></i> Update Pengumuman
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