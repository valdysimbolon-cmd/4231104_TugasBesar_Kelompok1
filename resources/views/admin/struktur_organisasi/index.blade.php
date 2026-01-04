@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kelola Anggota Struktur Organisasi</h1>

    <!-- FORM TAMBAH (Untuk Input Nama, Jabatan, Tugas) -->
    <div class="card shadow mb-4 border-left-primary">
        <div class="card-body">
            <form action="{{ route('struktur-organisasi.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Contoh: Kepala Sekolah" required>
                    </div>
                    <div class="col-md-3">
                        <label>Nama Guru/Staf</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap & Gelar" required>
                    </div>
                    <div class="col-md-4">
                        <label>Uraian Tugas</label>
                        <input type="text" name="tugas" class="form-control" placeholder="Tugas pokok..." required>
                    </div>
                    <div class="col-md-2">
                        <label>&nbsp;</label>
                        <button type="submit" class="btn btn-primary btn-block">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- TABEL HASIL INPUT -->
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jabatan</th>
                        <th>Nama Guru</th>
                        <th>Tugas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tugas }}</td>
                        <td>
                            <form action="{{ route('struktur-organisasi.destroy', $item->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection