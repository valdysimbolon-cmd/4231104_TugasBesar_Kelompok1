<section class="page-section bg-light-custom" id="gallery">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Galeri Sekolah</h2>
            <h3 class="section-subheading text-muted">Momen Kegiatan Belajar & Mengajar</h3>
        </div>
        <div class="row g-4">
            @forelse($galeris as $g)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ asset('Admin/img/galeri/'.$g->foto) }}" target="_blank">
                        <img src="{{ asset('Admin/img/galeri/'.$g->foto) }}" class="img-fluid rounded shadow-sm border border-white border-3 w-100" style="height: 250px; object-fit: cover;" onerror="this.onerror=null; this.src='https://placehold.co/400x400?text=Foto+Galeri';">
                    </a>
                    <div class="text-center mt-2 font-weight-bold small text-dark">{{ $g->judul_kegiatan }}</div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">Koleksi foto galeri belum tersedia.</div>
            @endforelse
        </div>
    </div>
</section>