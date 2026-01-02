@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Header Page -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Manajemen Galeri</h2>
        <button type="button" class="btn btn-info shadow-sm" style="background-color: #3bc3d1; border: none;" data-toggle="modal" data-target="#modalTambahGaleri">
            <i class="fas fa-camera mr-2"></i> Tambah Foto Kegiatan
        </button>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <!-- Penyesuaian Warna Teal/Info pada Judul Card -->
            <h6 class="m-0 font-weight-bold" style="color: #3bc3d1;">
                <i class="fas fa-images mr-1"></i> Daftar Foto Kegiatan
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" width="5%">No</th>
                            <th>Judul Kegiatan</th>
                            <th class="text-center">Preview Foto</th>
                            <th class="text-center" width="15%">Opsi Kelola</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galeris as $index => $g)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="font-weight-bold text-secondary">{{ $g->judul_kegiatan }}</td>
                            <td class="text-center">
                                <a href="{{ asset('Admin/img/galeri/'.$g->foto) }}" target="_blank" class="btn btn-outline-info btn-sm rounded-pill px-3">
                                    <i class="fas fa-image mr-1"></i> Lihat Foto
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <!-- TOMBOL EDIT BULAT -->
                                    <a href="{{ route('galeri.edit', $g->id) }}" class="btn btn-warning btn-sm rounded-circle mx-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <!-- TOMBOL HAPUS BULAT -->
                                    <form action="{{ route('galeri.destroy', $g->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm rounded-circle mx-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Galeri (SUDAH DISESUAIKAN) -->
<div class="modal fade" id="modalTambahGaleri" tabindex="-1" role="dialog" aria-labelledby="modalTambahGaleriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-white border-bottom py-3">
                <h5 class="modal-title font-weight-bold text-info" id="modalTambahGaleriLabel">
                    <i class="fas fa-camera mr-2"></i> Tambah Galeri Baru
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <!-- Judul Kegiatan -->
                    <div class="form-group mb-4">
                        <label class="font-weight-bold text-dark">Judul Kegiatan</label>
                        <input type="text" name="judul_kegiatan" class="form-control" placeholder="Contoh: Bermain Bola" required>
                    </div>

                    <!-- Custom Unggah Foto (Sesuai Gaya Berita) -->
                    <div class="form-group mb-0">
                        <label class="font-weight-bold text-dark">Unggah Foto</label>
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="customFileGaleri" required>
                            <label class="custom-file-label" for="customFileGaleri">Pilih foto kegiatan...</label>
                        </div>
                        <small class="text-muted mt-2 d-block italic">
                            <i class="fas fa-info-circle mr-1"></i> *Format: JPG, PNG, JPEG (Maksimal 2MB)
                        </small>
                    </div>
                </div>

                <div class="modal-footer border-0 bg-light">
                    <button type="button" class="btn btn-light px-4" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info px-4 shadow-sm" style="background-color: #3bc3d1; border: none;">
                        <i class="fas fa-save mr-2"></i> Simpan Galeri
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script agar nama file muncul di label Modal -->
<script>
    document.getElementById('customFileGaleri').onchange = function () {
        let fileName = this.files[0].name;
        this.nextElementSibling.innerText = fileName;
    }
</script>

@endsection