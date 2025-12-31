@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Header Halaman -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Berita & Kegiatan</h1>
        <a href="{{ route('berita.create') }}" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Berita</span>
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-left-success" role="alert">
            <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-white">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Konten Berita</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle" width="100%" cellspacing="0">
                    <thead class="bg-light">
                        <tr class="text-dark">
                            <th width="5%" class="text-center">No</th>
                            <th width="15%" class="text-center">Gambar</th>
                            <th width="55%">Informasi Berita</th>
                            <th width="25%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($beritas as $key => $b)
                        <tr>
                            <td class="text-center font-weight-bold align-middle">{{ $key + 1 }}</td>
                            <td class="text-center align-middle">
                                <img src="{{ asset('Admin/img/berita/'.$b->gambar) }}" 
                                     class="rounded shadow-sm border" 
                                     style="width: 100px; height: 70px; object-fit: cover;">
                            </td>
                            <td class="align-middle">
                                <h6 class="font-weight-bold text-primary mb-1">{{ $b->judul }}</h6>
                                <p class="small text-muted mb-0">{{ Str::limit($b->isi, 100) }}</p>
                            </td>
                            <td class="text-center align-middle">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('berita.edit', $b->id) }}" class="btn btn-warning btn-sm shadow-sm px-3" title="Edit">
                                        <i class="fas fa-edit mr-1"></i> Edit
                                    </a>
                                    
                                    <form action="{{ route('berita.destroy', $b->id) }}" method="POST" class="d-inline ml-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm shadow-sm px-3" onclick="return confirm('Yakin ingin menghapus berita ini?')">
                                            <i class="fas fa-trash mr-1"></i> Hapus
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