@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <h4 class="mb-4 font-weight-bold">Struktur Organisasi</h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- FORM --}}
        <form action="{{ route('struktur-organisasi.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-4">
                    <input name="jabatan" class="form-control" placeholder="Jabatan" required>
                </div>
                <div class="col-md-4">
                    <input name="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="col-md-4">
                    <input name="tugas" class="form-control" placeholder="Tugas" required>
                </div>
            </div>
            <button class="btn btn-primary btn-sm">Tambah</button>
        </form>

        <hr>

        {{-- TABEL --}}
        <table class="table table-bordered mt-3">
            <thead class="bg-dark text-white text-center">
                <tr>
                    <th>No</th>
                    <th>Jabatan</th>
                    <th>Nama</th>
                    <th>Tugas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tugas }}</td>
                        <td class="text-center">
                            <form method="POST" action="{{ route('struktur-organisasi.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection