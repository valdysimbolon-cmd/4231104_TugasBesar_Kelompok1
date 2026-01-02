@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Header Page -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="font-weight-bold text-dark">Manajemen Berita & Kegiatan</h2>
        <a href="{{ route('berita.create') }}" class="btn btn-info shadow-sm" style="background-color: #3bc3d1; border: none;">
            <i class="fas fa-plus-circle mr-2"></i> Tambah Berita
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h6 class="m-0 font-weight-bold" style="color: #3bc3d1;">Daftar Konten Berita</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" width="5%">No</th>
                            <th width="15%">Gambar</th>
                            <th>Judul Berita</th>
                            <th class="text-center" width="15%">Opsi Kelola</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($beritas as $index => $b)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="text-center">
                                <img src="{{ asset('Admin/img/berita/'.$b->gambar) }}" class="rounded shadow-sm" style="width: 80px; height: 50px; object-fit: cover;">
                            </td>
                            <td>
                                <span class="font-weight-bold text-dark">{{ $b->judul }}</span>
                                <br>
                                <small class="text-muted">{{ Str::limit($b->isi, 50) }}</small>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('berita.edit', $b->id) }}" class="btn btn-warning btn-sm rounded-circle mx-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('berita.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
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
@endsection