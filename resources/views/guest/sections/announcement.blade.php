<section class="page-section" id="announcement">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Pengumuman</h2>
            <h3 class="section-subheading text-muted">Informasi Resmi Sekolah</h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pengumumans as $i => $p)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $p->judul }}</td>
                            <td class="text-center">
                                <a href="{{ asset('Admin/files/pengumuman/'.$p->file_upload) }}"
                                   class="btn btn-sm btn-success" target="_blank">
                                   Download
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada pengumuman</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
