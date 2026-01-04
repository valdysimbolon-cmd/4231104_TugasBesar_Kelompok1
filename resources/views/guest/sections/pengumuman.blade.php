@extends('guest.layouts.app')

@section('content')
<section class="page-section">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="section-heading text-uppercase">Pengumuman</h2>
        </div>

        {{-- Form Search --}}
        <form method="GET" class="mb-4">
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex">
                    <input type="text"
                           name="search"
                           class="form-control me-2"
                           placeholder="Cari pengumuman..."
                           value="{{ request('search') }}">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>

        <div class="row">
            @forelse($pengumumans as $p)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>{{ $p->judul }}</h5>
                            <p>{{ Str::limit($p->isi, 150) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">Pengumuman tidak ditemukan.</p>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4 d-flex justify-content-center">
            {{ $pengumumans->withQueryString()->links() }}
        </div>

    </div>
</section>
@endsection
