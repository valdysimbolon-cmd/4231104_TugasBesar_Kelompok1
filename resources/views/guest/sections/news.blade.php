<section class="py-5 bg-light" id="news">
    <div class="container py-4">
        <!-- Judul Header -->
        <div class="text-center mb-5">
            <span class="news-subtitle">AKTIVITAS</span>
            <h2 class="display-5 fw-bold text-dark">Berita & Kegiatan</h2>
            <p class="lead text-muted">Momen terbaru siswa-siswi SMP Budi Mulia</p>
            <div class="header-line-news"></div>
        </div>      
        
        <div class="row g-4 justify-content-center">
            @forelse($beritas as $b)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="news-gallery-card shadow-sm h-100">
                    
                    <div class="news-img-container">
                        <img src="{{ asset('Admin/img/berita/'.$b->gambar) }}" 
                             alt="{{ $b->judul }}"
                             class="news-img-effect"
                             onerror="this.src='https://placehold.co/600x400?text=Berita';">
                        
                        <div class="news-overlay-effect"></div>

                        <div class="news-date-badge">
                            {{ $b->created_at->format('d M') }}
                        </div>
                    </div>
                    
                    <div class="card-body d-flex flex-column news-padding">
                        <h5 class="news-card-title">{{ $b->judul }}</h5>
                        <p class="news-card-text">
                            {{ Str::limit(strip_tags($b->isi), 100) }}
                        </p>
                        
                        <div class="mt-auto">
                            @if($b->link_berita)
                                <a href="{{ $b->link_berita }}" target="_blank" class="news-btn-link ig-color">
                                    Lihat di Instagram <i class="fab fa-instagram ms-1"></i>
                                </a>
                            @else
                                <a href="#" class="news-btn-link blue-color">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">Belum ada berita terbaru.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    .news-subtitle { display: block; color: #0d6efd; font-weight: 700; letter-spacing: 2px; }
    .header-line-news { width: 50px; height: 4px; background-color: #0d6efd; margin: 15px auto 0; border-radius: 2px; }

    .news-gallery-card {
        background: #fff;
        border-radius: 15px !important;
        overflow: hidden !important;
        border: 1px solid #eee !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
    }

    .news-img-container {
        width: 100% !important;
        height: 200px !important;
        max-height: 200px !important;
        overflow: hidden !important;
        position: relative !important;
    }

    .news-img-effect {
        width: 100% !important;
        height: 200px !important;
        object-fit: cover !important;
        object-position: top !important;
        transition: transform 0.5s ease !important;
        display: block !important;
    }

    .news-overlay-effect {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(13, 110, 253, 0.4); 
        opacity: 0;
        transition: opacity 0.4s ease;
        backdrop-filter: blur(1px);
        z-index: 3;
    }

    .news-date-badge {
        position: absolute;
        bottom: 12px; right: 12px;
        background: #0d6efd;
        color: white;
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 700;
        z-index: 4;
    }

    .news-padding { padding: 20px !important; }
    .news-card-title { font-size: 1.1rem; font-weight: 700; color: #222; margin-bottom: 12px; }
    .news-card-text { font-size: 0.85rem; color: #666; margin-bottom: 20px; line-height: 1.6; }
    .news-btn-link { text-decoration: none; font-size: 0.85rem; font-weight: 700; }
    .ig-color { color: #e1306c; }
    .blue-color { color: #0d6efd; }

    /* Hover */
    .news-gallery-card:hover {
        transform: translateY(-10px) !important;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    .news-gallery-card:hover .news-img-effect { transform: scale(1.1) !important; }
    .news-gallery-card:hover .news-overlay-effect { opacity: 1 !important; }
</style>