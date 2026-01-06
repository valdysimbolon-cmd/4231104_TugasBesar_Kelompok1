<div class="profile-section-wrapper" id="about">

    <!-- 1. VISI & MISI -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase" style="letter-spacing: 2px;">TUJUAN KAMI</span>
                <h2 class="display-5 fw-bold text-dark">Visi & Misi</h2>
                <div class="header-line-blue mx-auto mt-3"></div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="elegant-vision-card shadow-sm h-100">
                        <div class="icon-circle-bg mb-3">
                            <i class="fas fa-eye fa-2x text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3 text-dark text-center">VISI</h3>
                        <p class="visi-text">
                            "{{ $profil->visi ?? 'Visi sekolah belum diatur.' }}"
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="elegant-vision-card shadow-sm h-100">
                        <div class="icon-circle-bg mb-3 mx-auto">
                            <i class="fas fa-bullseye fa-2x text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3 text-dark text-center">MISI</h3>
                        <div class="misi-list text-muted text-start">
                            {!! $profil->misi ? nl2br(e($profil->misi)) : 'Misi sekolah belum diatur.' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SEJARAH -->
    <section class="py-5 bg-light-custom">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="history-img-wrapper shadow-lg border border-white border-5">
                        <img src="{{ asset('Admin/img/profil/sekolah_depan.jpg') }}" 
                             class="img-fluid rounded-4" alt="Gedung Sekolah"
                             onerror="this.src='https://placehold.co/600x400?text=Gedung+Sekolah';">
                    </div>
                </div>
                <div class="col-lg-7">
                    <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 2px;">REKAM JEJAK</span>
                    <h2 class="fw-bold text-dark mb-4 display-6">Sejarah Sekolah</h2>
                    <div class="history-content text-muted">
                        {!! $profil->sejarah ? nl2br(e($profil->sejarah)) : 'Data sejarah belum tersedia.' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. STRUKTUR ORGANISASI -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase" style="letter-spacing: 2px;">ORGANISASI</span>
                <h2 class="display-5 fw-bold text-dark">Struktur Organisasi</h2>
                <p class="text-muted small">Bagan & Rincian Tugas Guru/Staf SMP Budi Mulia</p>
                <div class="header-line-blue mx-auto mt-3"></div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <div class="structure-img-box shadow-sm border rounded-4 bg-white">
                        @if($profil && $profil->struktur_organisasi)
                            <a href="{{ asset('Admin/img/profil/' . $profil->struktur_organisasi) }}" target="_blank">
                                <img src="{{ asset('Admin/img/profil/' . $profil->struktur_organisasi) }}" 
                                     class="structure-img-limited" alt="Bagan Struktur">
                            </a>
                        @else
                            <div class="py-5 text-center text-muted italic">Bagan struktur belum diunggah.</div>
                        @endif
                    </div>
                    <p class="text-center small text-muted mt-3 italic"><i class="fas fa-search-plus me-1"></i> Klik gambar untuk memperbesar</p>
                </div>
            </div>

            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="table-responsive">
                    <table class="table elegant-table table-hover mb-0">
                        <thead class="bg-dark text-white text-center small">
                            <tr>
                                <th width="70">NO</th>
                                <th width="200">JABATAN</th>
                                <th>NAMA LENGKAP</th>
                                <th>URAIAN TUGAS</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @forelse($struktur as $key => $item)
                            <tr>
                                <td class="text-center fw-bold text-muted">{{ $key + 1 }}</td>
                                <td class="text-center"><span class="badge-jabatan">{{ $item->jabatan }}</span></td>
                                <td class="fw-bold text-dark">{{ $item->nama }}</td>
                                <td class="text-muted small">{{ $item->tugas }}</td>
                            </tr>
                            @empty
                            <tr><td colspan="4" class="text-center py-4 text-muted italic">Data anggota belum tersedia.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            @if(isset($profil->tugas_tanggung_jawab))
            <div class="text-center mt-5 p-4 bg-light-custom rounded-4 border-start border-primary border-4">
                <p class="mb-0 text-dark fw-bold italic"><i class="fas fa-info-circle text-primary me-2"></i> {{ $profil->tugas_tanggung_jawab }}</p>
            </div>
            @endif
        </div>
    </section>

</div>