<section class="py-5 bg-white" id="announcement">
    <div class="container">
        <div class="announcement-header text-center mb-5">
            <h2 class="fw-bold text-dark">PENGUMUMAN</h2>
            <p class="text-muted">Informasi resmi dan terbaru dari sekolah</p>
            <div class="header-line"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                @forelse ($pengumumans as $p)
                    <div class="announcement-card shadow-sm mb-3">
                        <div class="announcement-body">
                            <div class="announcement-content">
                                <h5 class="announcement-title">{{ $p->judul }}</h5>
                                <div class="announcement-meta">
                                    <i class="far fa-calendar-alt me-1"></i>
                                    <span>Dipublikasikan: {{ $p->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                            <div class="announcement-action">
                                <a href="{{ asset('Admin/files/pengumuman/'.$p->file_upload) }}"
                                   class="btn-unduh shadow-sm"
                                   target="_blank">
                                    <i class="fas fa-download me-2"></i> Unduh Berkas
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5 text-muted">
                        <i class="fas fa-bullhorn fa-3x mb-3 opacity-25"></i>
                        <p class="mb-0 italic">Belum ada pengumuman resmi saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>