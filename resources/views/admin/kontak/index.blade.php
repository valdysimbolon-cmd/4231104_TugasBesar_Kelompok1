@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="font-weight-bold text-dark mb-4">Manajemen Kontak Sekolah</h2>

    <div class="card shadow-sm border-left-info">
        <div class="card-header bg-white py-3">
            <h6 class="m-0 font-weight-bold text-info">
                <i class="fas fa-address-book mr-2"></i> Form Informasi Kontak Sekolah
            </h6>
        </div>
        <div class="card-body">
            <!-- Jika data belum ada di database -->
            @if(!$kontak)
                <div class="alert alert-warning">
                    Data kontak belum ada. Silakan isi data awal melalui Database Seeder.
                </div>
            @else
                <form action="{{ route('kontak.update', $kontak->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="font-weight-bold text-dark">Email Sekolah</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $kontak->email) }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label class="font-weight-bold text-dark">Nomor Telepon</label>
                                <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp', $kontak->no_telp) }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="font-weight-bold text-dark">Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control" rows="4" required>{{ old('alamat', $kontak->alamat) }}</textarea>
                    </div>

                    <hr>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-info px-4 shadow-sm" style="background-color: #3bc3d1; border: none;">
                            <i class="fas fa-save mr-2"></i> Simpan Perubahan Kontak
                        </button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>
@endsection