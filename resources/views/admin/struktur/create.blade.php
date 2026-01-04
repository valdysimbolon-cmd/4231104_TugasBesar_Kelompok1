@extends('layouts.dashboard')

@section('content')
<div class="container">

    <h4>Tambah Struktur Organisasi</h4>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('struktur-organisasi.store') }}" method="POST">
        @csrf

        <div class="mb-2">
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
        </div>

        <div class="mb-2">
            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
        </div>

        <div class="mb-2">
            <textarea name="tugas" class="form-control" placeholder="Tugas" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
@endsection
