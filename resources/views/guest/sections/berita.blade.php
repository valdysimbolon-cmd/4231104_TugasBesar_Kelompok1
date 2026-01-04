<section class="page-section" id="news">
    <div class="container">

        {{-- Judul --}}
        <div class="text-center mb-4">
            <h2 class="section-heading text-uppercase">Berita</h2>
        </div>

        {{-- Form Search --}}
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <form method="GET" action="{{ route('berita.semua') }}" class="d-flex">
                    <input type="text"
                           name="search"
                           class="form-control me-2"
                           placeholder="Cari berita..."
                           value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">
                        Cari
                    </button>
                </form>
            </div>
        </div>

        {{-- Daftar Berita --}}
        <div class="row mt-4">
            @forelse($beritas as $b)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->judul }}</h5>
                            <p class="card-text">
                                {{ Str::limit($b->isi, 100) }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted">
                    Tidak ada berita ditemukan.
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4 d-flex justify-content-center">
            {{ $beritas->withQueryString()->links() }}
        </div>

    </div>
</section>
