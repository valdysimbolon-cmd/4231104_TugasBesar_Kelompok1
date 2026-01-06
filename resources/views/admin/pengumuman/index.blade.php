@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Manajemen Pengumuman</h1>
        <a href="{{ route('pengumuman.create') }}" class="btn btn-info btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-bullhorn"></i>
            </span>
            <span class="text">Tambah Pengumuman</span>
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

    {{-- SEARCH PENGUMUMAN --}}
<form action="{{ route('pengumuman.index') }}" method="GET" class="mb-3">
    <div class="row">
        <div class="col-md-4">
            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Cari pengumuman..."
                value="{{ request('search') }}"
            >
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary">
                <i class="fas fa-search"></i> Cari
            </button>
        </div>
    </div>
</form>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-white border-bottom">
            <h6 class="m-0 font-weight-bold text-info">Daftar Dokumen Pengumuman</h6>
        </div>
        <div class="card-body p-0"> {{-- p-0 agar tabel terlihat full ke pinggir card --}}
            <div class="table-responsive">
                <table class="table table-hover mb-0" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th width="8%">No</th>
                            <th class="text-left">Judul Pengumuman</th>
                            <th width="25%">Berkas</th>
                            <th width="20%">Opsi Kelola</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengumumans as $key => $p)
                        <tr class="text-center">
                            <td class="align-middle font-weight-bold">{{ $key + 1 }}</td>
                            <td class="align-middle text-left font-weight-bold text-dark">{{ $p->judul }}</td>
                            <td class="align-middle text-center">
                                <a href="{{ asset('Admin/files/pengumuman/'.$p->file_upload) }}" 
                                   class="btn btn-outline-info btn-sm rounded-pill px-3" target="_blank">
                                    <i class="fas fa-external-link-alt mr-1"></i> Buka Dokumen
                                </a>
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('pengumuman.edit', $p->id) }}" class="btn btn-circle btn-warning btn-sm shadow-sm" title="Ubah">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                <form action="{{ route('pengumuman.destroy', $p->id) }}" method="POST" class="d-inline ml-1">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="btn btn-circle btn-danger btn-sm shadow-sm" onclick="return confirm('Hapus pengumuman ini?')" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
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