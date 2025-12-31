<section class="page-section bg-light" id="news">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Berita</h2>
            <h3 class="section-subheading text-muted">Berita Terbaru Sekolah</h3>
        </div>

        <div class="row">
            @forelse($beritas as $b)
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <img class="img-fluid" src="{{ asset('Admin/img/berita/'.$b->gambar) }}" alt="">
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $b->judul }}</div>
                        <div class="portfolio-caption-subheading text-muted">
                            {{ Str::limit($b->isi, 80) }}
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">Belum ada berita</p>
            @endforelse
        </div>
    </div>
</section>
