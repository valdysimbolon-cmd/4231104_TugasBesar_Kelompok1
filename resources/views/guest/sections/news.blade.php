<section class="page-section bg-light-custom" id="news">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Berita & Kegiatan</h2>
            <h3 class="section-subheading text-muted">Aktivitas Terbaru Siswa</h3>
        </div>
        <div class="row">
            @forelse($beritas as $b)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item card card-custom h-100 shadow-sm border-0 overflow-hidden">
                    <img class="img-fluid" src="{{ asset('Admin/img/berita/'.$b->gambar) }}" style="height: 250px; object-fit: cover;" onerror="this.onerror=null; this.src='https://placehold.co/400x250?text=No+Image';">
                    <div class="portfolio-caption p-4 bg-white text-center">
                        <div class="portfolio-caption-heading fw-bold h5 mb-2">{{ $b->judul }}</div>
                        <div class="portfolio-caption-subheading text-muted small">{{ Str::limit($b->isi, 100) }}</div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">Belum ada berita terbaru.</div>
            @endforelse
        </div>
                {{-- Tombol Lihat Semua Berita --}}
        @if($beritas->count() >= 3)
        <div class="text-center mt-4">
            <a href="{{ route('berita.index') }}"
               class="btn btn-outline-primary btn-sm px-4 rounded-pill shadow-sm">
                <i class="fas fa-newspaper me-2"></i>
                Lihat Semua Berita
            </a>
        </div>
                {{-- Tombol Lihat Semua Berita --}}
        @if($beritas->count() >= 3)
        <div class="text-center mt-4">
            <a href="{{ route('berita.index') }}"
               class="btn btn-outline-primary btn-sm px-4 rounded-pill shadow-sm">
                <i class="fas fa-newspaper me-2"></i>
                Lihat Semua Berita
            </a>
        </div>
         {{-- Tombol Lihat Semua Berita --}}
        @if($beritas->count() >= 3)
        <div class="text-center mt-4">
            <a href="{{ route('berita.index') }}"
               class="btn btn-outline-primary btn-sm px-4 rounded-pill shadow-sm">
                <i class="fas fa-newspaper me-2"></i>
                Lihat Semua Berita
            </a>
        </div>
                {{-- Tombol Lihat Semua Berita --}}
        @if($beritas->count() >= 3)
        <div class="text-center mt-4">
            <a href="{{ route('berita.index') }}"
               class="btn btn-outline-primary btn-sm px-4 rounded-pill shadow-sm">
                <i class="fas fa-newspaper me-2"></i>
                Lihat Semua Berita
            </a>
        </div>
        
    </div>
</section>