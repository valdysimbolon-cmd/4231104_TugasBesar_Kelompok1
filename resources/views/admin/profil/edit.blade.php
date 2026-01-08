@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Manajemen Profil Sekolah</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success border-left-success shadow-sm alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    @endif

    <form action="{{ route('profil-sekolah.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card shadow mb-4 border-bottom-primary">
            <div class="card-header py-3 bg-white">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-university mr-2"></i> Informasi Utama Sekolah</h6>
            </div>
            <div class="card-body">
                <div class="form-group mb-4">
                    <label class="font-weight-bold text-dark">Sejarah Singkat</label>
                    <textarea name="sejarah" class="form-control" rows="6" required>{{ old('sejarah', $profil->sejarah) }}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mb-4">
                        <label class="font-weight-bold text-dark">Visi Sekolah</label>
                        <textarea name="visi" class="form-control" rows="4" required>{{ old('visi', $profil->visi) }}</textarea>
                    </div>
                    <div class="col-md-6 form-group mb-4">
                        <label class="font-weight-bold text-dark">Misi Sekolah</label>
                        <textarea name="misi" class="form-control" rows="4" required>{{ old('misi', $profil->misi) }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold text-dark">Keterangan Tambahan Tugas & Tanggung Jawab</label>
                    <input type="text" name="tugas_tanggung_jawab" class="form-control" value="{{ old('tugas_tanggung_jawab', $profil->tugas_tanggung_jawab) }}" required>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4 border-bottom-info">
            <div class="card-header py-3 bg-white d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-users mr-2"></i> Rincian Tugas Guru & Staf</h6>
                <button type="button" class="btn btn-info btn-sm shadow-sm" id="btn-tambah-baris">
                    <i class="fas fa-plus fa-sm"></i> Tambah Anggota
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover border" id="tabel-staf">
                        <thead class="bg-light text-dark text-center small font-weight-bold">
                            <tr>
                                <th width="25%">JABATAN</th>
                                <th width="30%">NAMA LENGKAP</th>
                                <th width="35%">URAIAN TUGAS</th>
                                <th width="10%">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $dataStaf = \App\Models\StrukturOrganisasi::all(); @endphp
                            @forelse($dataStaf as $staf)
                            <tr>
                                <td><input type="text" name="jabatan[]" class="form-control form-control-sm" value="{{ $staf->jabatan }}" required></td>
                                <td><input type="text" name="nama[]" class="form-control form-control-sm" value="{{ $staf->nama }}" required></td>
                                <td><input type="text" name="tugas[]" class="form-control form-control-sm" value="{{ $staf->tugas }}"></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-circle btn-hapus-baris"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td><input type="text" name="jabatan[]" class="form-control form-control-sm" placeholder="Kepala Sekolah"></td>
                                <td><input type="text" name="nama[]" class="form-control form-control-sm" placeholder="Nama Guru"></td>
                                <td><input type="text" name="tugas[]" class="form-control form-control-sm" placeholder="Tugas"></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-circle btn-hapus-baris"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <small class="text-muted"><i class="fas fa-info-circle"></i> Klik "Tambah Anggota" untuk menambah baris baru tanpa batas.</small>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <label class="font-weight-bold text-dark">Gambar Bagan Struktur Organisasi</label>
                <div class="row align-items-center">
                    <div class="col-md-3 text-center">
                        @if($profil->struktur_organisasi)
                            <img src="{{ asset('Admin/img/profil/' . $profil->struktur_organisasi) }}" class="img-fluid rounded border shadow-sm mb-2" style="max-height: 150px;">
                        @endif
                    </div>
                    <div class="col-md-9 border-left">
                        <input type="file" name="struktur_organisasi" class="form-control-file mb-2">
                        <small class="text-info d-block">Gunakan file gambar (JPG/PNG). Kosongkan jika tidak diganti.</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <button type="submit" class="btn btn-primary btn-lg btn-block shadow font-weight-bold py-3">
                <i class="fas fa-save mr-2"></i> SIMPAN SEMUA PERUBAHAN
            </button>
        </div>
    </form>
</div>

<script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // Fungsi Tambah Baris
        $("#btn-tambah-baris").click(function() {
            var newRow = `
                <tr>
                    <td><input type="text" name="jabatan[]" class="form-control form-control-sm" placeholder="Jabatan Baru" required></td>
                    <td><input type="text" name="nama[]" class="form-control form-control-sm" placeholder="Nama Baru" required></td>
                    <td><input type="text" name="tugas[]" class="form-control form-control-sm" placeholder="Tugas Baru"></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger btn-sm rounded-circle btn-hapus-baris"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>`;
            $("#tabel-staf tbody").append(newRow);
        });

        // Fungsi Hapus Baris
        $(document).on('click', '.btn-hapus-baris', function() {
            if ($("#tabel-staf tbody tr").length > 1) {
                $(this).closest('tr').remove();
            } else {
                alert("Minimal harus ada satu baris data!");
            }
        });
    });
</script>
@endsection