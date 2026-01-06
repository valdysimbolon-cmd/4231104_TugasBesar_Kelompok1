@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h2 class="font-weight-bold text-dark mb-4">Profil Saya</h2>

    @if(session('success'))
        <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm border-left-primary">
        <div class="card-header bg-white py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-cog mr-2"></i> Pengaturan Akun</h6>
        </div>
        <div class="card-body">
            <!-- Gunakan route profile.update -->
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>

                <hr>
                <label class="text-danger font-weight-bold">Ganti Password (Kosongkan jika tidak ingin ganti)</label>
                <div class="row">
                    <div class="col-md-6">
                        <input type="password" name="password" class="form-control" placeholder="Password Baru">
                    </div>
                    <div class="col-md-6">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password Baru">
                    </div>
                </div>

                <div class="mt-4 text-right">
                    <button type="submit" class="btn btn-primary px-4 shadow">
                        <i class="fas fa-save mr-1"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection