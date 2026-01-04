<!-- CSS UNTUK TAMPILAN ELEGAN -->
<style>
    .section-title-line {
        width: 60px;
        height: 3px;
        background: #0d6efd;
        margin: 10px auto 30px;
        border-radius: 2px;
    }
    .elegant-card {
        background: #ffffff;
        border: 1px solid #eef2f7;
        border-radius: 15px;
        padding: 40px 30px;
        transition: all 0.3s ease;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.02);
    }
    .elegant-card:hover {
        transform: translateY(-5px);
        border-color: #0d6efd;
        box-shadow: 0 10px 25px rgba(13, 110, 253, 0.1);
    }
    .accent-text {
        color: #0d6efd;
        font-weight: 700;
        letter-spacing: 2px;
        font-size: 0.8rem;
        display: block;
        margin-bottom: 10px;
    }
    .clean-table thead {
        background: #212529;
        color: #fff;
    }
    .clean-table th { padding: 15px !important; border: none; font-size: 0.9rem; }
    .clean-table td { padding: 15px !important; vertical-align: middle; }
    .jabatan-label {
        color: #0d6efd;
        font-weight: 700;
        font-size: 0.8rem;
        text-transform: uppercase;
    }
</style>

<!-- 1. VISI & MISI -->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Visi & Misi</h2>
            <div class="section-title-line"></div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="elegant-card text-center">
                    <span class="accent-text">OUR VISION</span>
                    <h3 class="fw-bold mb-3">VISI</h3>
                    <p class="text-muted fst-italic" style="font-size: 1.1rem;">
                        "{{ $profil->visi ?? 'Visi sekolah belum diisi.' }}"
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="elegant-card">
                    <div class="text-center">
                        <span class="accent-text">OUR MISSION</span>
                        <h3 class="fw-bold mb-3">MISI</h3>
                    </div>
                    <div class="text-muted" style="line-height: 1.8; font-size: 0.95rem;">
                        {!! nl2br(e($profil->misi ?? 'Misi sekolah belum diisi.')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. SEJARAH SEKOLAH -->
<section class="page-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4">
                <img src="{{ asset('Admin/img/profil/sekolah_depan.jpg') }}" 
                     class="img-fluid rounded-4 shadow-lg border-5 border-white border" 
                     alt="Gedung Sekolah">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h2 class="section-heading text-uppercase">Sejarah Sekolah</h2>
                <div class="text-muted mt-3" style="text-align: justify; line-height: 1.9;">
                    {!! nl2br(e($profil->sejarah ?? 'Data sejarah belum tersedia.')) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. STRUKTUR ORGANISASI (GAMBAR BAGAN & TABEL RINCIAN) -->
<section class="page-section" id="tugas-tanggung-jawab">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Struktur Organisasi</h2>
            <h3 class="section-subheading text-muted">Bagan Struktur Organisasi SMP Budi Mulia Pangururan</h3>
            <div class="section-title-line"></div>
        </div>

        <!-- A. TAMPILKAN GAMBAR BAGAN (DARI ADMIN PROFIL) -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <div class="p-3 bg-white shadow-sm rounded-4 mb-3 border">
                    @if($profil && $profil->struktur_organisasi)
                        <img src="{{ asset('Admin/img/profil/' . $profil->struktur_organisasi) }}" 
                             class="img-fluid rounded-3" 
                             alt="Bagan Struktur Organisasi">
                    @else
                        <p class="text-muted py-5">Bagan struktur organisasi belum diunggah.</p>
                    @endif
                </div>
                <small class="text-muted">Bagan & Rincian Tugas Guru/Staf</small>
            </div>
        </div>

        <!-- B. TAMPILKAN TABEL RINCIAN (DARI MENU STRUKTUR ORGANISASI) -->
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table clean-table table-hover mb-0">
                        <thead class="text-center">
                            <tr>
                                <th>NO</th>
                                <th>JABATAN</th>
                                <th>NAMA LENGKAP</th>
                                <th>URAIAN TUGAS</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @forelse($struktur as $key => $item)
                            <tr>
                                <td class="text-center text-muted fw-bold">{{ $key + 1 }}</td>
                                <td class="text-center">
                                    <span class="jabatan-label">{{ $item->jabatan }}</span>
                                </td>
                                <td class="fw-bold text-dark">{{ $item->nama }}</td>
                                <td class="text-muted small">{{ $item->tugas }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted fst-italic">
                                    Rincian tugas belum diinput di Dashboard (Menu Struktur Organisasi).
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @if($profil->tugas_tanggung_jawab)
        <div class="text-center mt-5">
            <p class="text-muted small italic">
                <i class="fas fa-info-circle me-1"></i> {{ $profil->tugas_tanggung_jawab }}
            </p>
        </div>
        @endif
    </div>
</section>