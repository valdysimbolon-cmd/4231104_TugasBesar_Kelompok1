<section class="py-5 bg-white" id="gallery">
    <div class="container">
        <!-- Judul Header -->
        <div class="gallery-header text-center mb-5">
            <h2 class="fw-bold text-dark">GALERI SEKOLAH</h2>
            <p class="text-muted">Momen Kegiatan Belajar & Mengajar</p>
            <div class="header-line"></div>
        </div>

        <div class="row g-4">
            @forelse($galeris as $g)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="gallery-card">
                    <a href="{{ asset('Admin/img/galeri/'.$g->foto) }}" target="_blank">
                        <div class="image-box">
                            <img src="{{ asset('Admin/img/galeri/'.$g->foto) }}" 
                                 alt="{{ $g->judul_kegiatan }}"
                                 onerror="this.onerror=null; this.src='https://placehold.co/600x400?text=Foto+Sekolah';">
                        </div>
                    </a>
                    <div class="gallery-body">
                        <p class="gallery-title">{{ $g->judul_kegiatan }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted italic">Koleksi foto belum tersedia.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>