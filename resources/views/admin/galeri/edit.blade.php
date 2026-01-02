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
                <i class="fas fa-camera mr-2"></i> Form Edit Foto Kegiatan
            </h6>
        </div>
        <div class="card-body">
            <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Judul Kegiatan</label>
                    <input type="text" name="judul_kegiatan" class="form-control" value="{{ old('judul_kegiatan', $galeri->judul_kegiatan) }}" required>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-dark">Ganti Foto</label>
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih foto baru...</label>
                            </div>
                            <small class="text-muted mt-2 d-block">*Biarkan kosong jika tidak ingin mengubah foto.</small>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center border-left">
                        <label class="font-weight-bold text-dark d-block">Foto Saat Ini</label>
                        <img id="preview" src="{{ asset('Admin/img/galeri/' . $galeri->foto) }}" class="rounded shadow-sm" style="max-height: 200px;">
                    </div>
                </div>

                <hr>
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('galeri.index') }}" class="btn btn-light mr-2">Batal</a>
                    <button type="submit" class="btn btn-info px-4 shadow-sm" style="background-color: #3bc3d1; border: none;">
                        <i class="fas fa-save mr-2"></i> Update Galeri
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('customFile').onchange = function () {
        const [file] = this.files
        if (file) {
            document.getElementById('preview').src = URL.createObjectURL(file)
            this.nextElementSibling.innerText = file.name;
        }
    }
</script>
@endsection