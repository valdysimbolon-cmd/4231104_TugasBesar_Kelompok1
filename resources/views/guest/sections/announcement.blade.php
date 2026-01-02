<section class="page-section" id="announcement">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Pengumuman</h2>
            <h3 class="section-subheading text-muted">Informasi Resmi Sekolah</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive shadow-sm bg-white rounded-4 overflow-hidden border">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-dark text-white text-uppercase small">
                            <tr>
                                <th class="ps-4 py-4 text-center" width="5%">No</th>
                                <th>Judul Pengumuman</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengumumans as $i => $p)
                            <tr>
                                <td class="text-center">{{ $i + 1 }}</td>
                                <td class="fw-semibold text-dark">{{ $p->judul }}</td>
                                <td class="text-center">
                                    <a href="{{ asset('Admin/files/pengumuman/'.$p->file_upload) }}" class="btn btn-sm btn-success px-4 rounded-pill shadow-sm" target="_blank">
                                        <i class="fas fa-download me-1"></i> Download
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="3" class="text-center py-5 text-muted">Tidak ada pengumuman tersedia.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>