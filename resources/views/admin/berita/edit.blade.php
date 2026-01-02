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
        <!-- Header Form (Sesuai gaya Tambah Berita) -->
        <div class="card-header bg-white py-3 border-bottom">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-edit mr-2"></i> Form Edit Informasi Berita
            </h6>
        </div>

        <div class="card-body">
            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- WAJIB UNTUK PROSES UPDATE --}}
                
                <!-- Judul Berita -->
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Judul Berita / Kegiatan</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" 
                           placeholder="Masukkan judul berita..." value="{{ old('judul', $berita->judul) }}" required>
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Isi Berita -->
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Isi Berita Lengkap</label>
                    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" 
                              rows="10" placeholder="Tuliskan detail kegiatan..." required>{{ old('isi', $berita->isi) }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Bagian Gambar -->
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label class="font-weight-bold text-dark">Ganti Gambar Berita</label>
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih file baru...</label>
                            </div>
                            <small class="text-muted mt-2 d-block">
                                <i class="fas fa-info-circle mr-1"></i> Biarkan kosong jika tidak ingin mengubah gambar.
                            </small>
                        </div>
                    </div>
                    
                    <!-- Preview Gambar Saat Ini -->
                    <div class="col-lg-6 text-center border-left">
                         <label class="font-weight-bold text-dark d-block">Gambar Saat Ini</label>
                         <div class="p-2 border rounded bg-light">
                             <img id="preview" src="{{ asset('Admin/img/berita/' . $berita->gambar) }}" 
                                  class="img-fluid rounded shadow-sm" style="max-height: 200px;"
                                  onerror="this.src='https://via.placeholder.com/300x150?text=Gambar+Tidak+Ditemukan'">
                         </div>
                    </div>
                </div>

                <hr>

                <!-- Tombol Update di Kanan Bawah -->
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('berita.index') }}" class="btn btn-light mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary px-4 shadow-sm" style="background-color: #3bc3d1; border: none;">
                        <i class="fas fa-save mr-2"></i> Update Berita
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
            let fileName = this.files[0].name;
            let nextSibling = evt.target.nextElementSibling
            nextSibling.innerText = fileName
        }
    }
</script>
@endsection