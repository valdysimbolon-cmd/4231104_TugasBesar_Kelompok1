@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Header Page -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Manajemen Berita & Kegiatan</h2>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-left-primary">
        <!-- Header Form (Sesuai gaya Kelola Profil) -->
        <div class="card-header bg-white py-3 border-bottom">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-edit mr-2"></i> Form Informasi Berita Baru
            </h6>
        </div>

        <div class="card-body">
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Judul Berita -->
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Judul Berita / Kegiatan</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" 
                           placeholder="Masukkan judul berita yang menarik..." value="{{ old('judul') }}" required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Isi Berita -->
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Isi Berita Lengkap</label>
                    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" 
                              rows="10" placeholder="Tuliskan detail kegiatan atau berita di sini..." required>{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Upload Gambar -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-dark">Gambar Utama Berita</label>
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Pilih file gambar...</label>
                            </div>
                            <small class="text-muted mt-2 d-block">
                                <i class="fas fa-info-circle mr-1"></i> Saran: Gunakan gambar dengan rasio lebar (Landscape) agar terlihat rapi.
                            </small>
                        </div>
                    </div>
                    
                    <!-- Preview Area (Opsional - Bagus untuk User Experience) -->
                    <div class="col-lg-6 text-center border-left">
                         <label class="font-weight-bold text-dark d-block">Preview Gambar</label>
                         <div class="p-2 border rounded bg-light" style="min-height: 150px;">
                             <img id="preview" src="https://via.placeholder.com/300x150?text=Preview+Gambar" 
                                  class="img-fluid rounded shadow-sm" style="max-height: 200px;">
                         </div>
                    </div>
                </div>

                <hr>

                <!-- Tombol Simpan di Kanan Bawah (Sesuai gaya Kelola Profil) -->
                <div class="d-flex justify-content-end mt-4">
                    <button type="reset" class="btn btn-light mr-2">Batal</button>
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">
                        <i class="fas fa-save mr-2"></i> Simpan Berita
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script untuk preview gambar & merubah label file input -->
<script>
    document.getElementById('customFile').onchange = function (evt) {
        const [file] = this.files
        if (file) {
            document.getElementById('preview').src = URL.createObjectURL(file)
            // Mengubah label "Choose File" menjadi nama file yang dipilih
            let fileName = this.files[0].name;
            let nextSibling = evt.target.nextElementSibling
            nextSibling.innerText = fileName
        }
    }
</script>
@endsection