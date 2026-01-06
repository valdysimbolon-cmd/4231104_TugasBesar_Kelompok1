@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Kelola Profil Sekolah</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Profil</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('profil-sekolah.update', $profil->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- 1. SEJARAH -->
                    <div class="form-group">
                        <label class="font-weight-bold">Sejarah Sekolah</label>
                        <textarea name="sejarah" class="form-control" rows="5"
                            required>{{ old('sejarah', $profil->sejarah) }}</textarea>
                    </div>

                    <!-- 2. VISI & MISI -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Visi</label>
                                <textarea name="visi" class="form-control" rows="4"
                                    required>{{ old('visi', $profil->visi) }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Misi</label>
                                <textarea name="misi" class="form-control" rows="4"
                                    required>{{ old('misi', $profil->misi) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <hr>


                    <!-- 3. INPUT DATA TABEL GURU & STAF (Sesuai Tabel struktur_organisasi) -->
                    <div class="card border-left-primary mb-4">
                        <div class="card-body bg-light">
                            <h6 class="font-weight-bold text-primary mb-3">Daftar Guru & Staf (Tabel)</h6>
                            <div class="alert alert-info py-2">
                                <small><i class="fas fa-info-circle"></i> Data di bawah ini diambil dari tabel
                                    <b>struktur_organisasi</b>. Edit teksnya untuk mengubah, hapus teksnya untuk menghapus
                                    baris.</small>
                            </div>

                            <!-- BAGIAN A: TAMPILKAN DATA LAMA (Looping dari Database) -->
                            @if(isset($dataStaf) && count($dataStaf) > 0)
                                @foreach($dataStaf as $staf)
                                    <div class="row mb-2">
                                        <input type="hidden" name="id[]" value="{{ $staf->id }}">

                                        <div class="col-md-3">
                                            <label class="small font-weight-bold">Jabatan</label>
                                            <input type="text" name="jabatan[]" class="form-control" value="{{ $staf->jabatan }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="small font-weight-bold">Nama Lengkap</label>
                                            <input type="text" name="nama[]" class="form-control" value="{{ $staf->nama }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small font-weight-bold">Tugas Spesifik</label>
                                            <input type="text" name="tugas[]" class="form-control" value="{{ $staf->tugas }}">
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            <!-- BAGIAN B: KOLOM KOSONG TAMBAHAN (Untuk Input Baru) -->
                            <hr>
                        <p class="small text-muted font-weight-bold">Tambah Data Baru (Isi jika perlu):</p>
                        
                        @for ($i = 0; $i < 8; $i++) 
                        <div class="row mb-2">
                            <input type="hidden" name="id[]" value=""> 

                            <div class="col-md-3">
                                <input type="text" name="jabatan[]" class="form-control" placeholder="Jabatan Baru">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="nama[]" class="form-control" placeholder="Nama Baru">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="tugas[]" class="form-control" placeholder="Tugas Baru...">
                            </div>
                        </div>
                        @endfor

                    <!-- 4. UPLOAD GAMBAR STRUKTUR -->
                    <div class="form-group">
                        <label class="font-weight-bold">Gambar Bagan Struktur Organisasi</label><br>
                        @if($profil->struktur_organisasi)
                            <div class="mb-2">
                                <img src="{{ asset('Admin/img/profil/' . $profil->struktur_organisasi) }}" width="200"
                                    class="img-thumbnail">
                            </div>
                        @endif
                        <input type="file" name="struktur_organisasi" class="form-control-file">
                        <small class="text-muted">Format: JPG, PNG. Maksimal 2MB.</small>
                    </div>

                    <!-- TOMBOL SIMPAN -->
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">
                            <i class="fas fa-save"></i> Simpan Semua Perubahan
                        </button>
                    </div>

                </form>
                <!-- Form End -->

            </div>
        </div>
    </div>
@endsection