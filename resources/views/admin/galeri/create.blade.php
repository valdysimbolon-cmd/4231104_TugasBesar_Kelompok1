@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Manajemen Galeri</h2>
        <a href="{{ route('galeri.index') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-left-info">
        <div class="card-header bg-white py-3">
            <h6 class="m-0 font-weight-bold text-info">
                <i class="fas fa-camera mr-2"></i> Form Tambah Galeri Baru
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Judul Kegiatan</label>
                    <input type="text" name="judul_kegiatan" class="form-control" placeholder="Contoh: Lomba Kebersihan Kelas" required>
                </div>

                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Unggah Foto</label>
                    <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Pilih foto kegiatan...</label>
                    </div>
                    <small class="text-muted mt-2 d-block italic">
                        <i class="fas fa-info-circle mr-1"></i> *Format: JPG, PNG, JPEG (Max 2MB)
                    </small>
                </div>

                <hr>
                <div class="d-flex justify-content-end mt-4">
                    <button type="reset" class="btn btn-light mr-2">Batal</button>
                    <button type="submit" class="btn btn-info px-4 shadow-sm" style="background-color: #3bc3d1; border: none;">
                        <i class="fas fa-save mr-2"></i> Simpan Galeri
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