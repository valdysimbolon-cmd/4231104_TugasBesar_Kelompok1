<section class="page-section" id="services">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Profil Sekolah</h2>
            <h3 class="section-subheading text-muted">Membangun Masa Depan Berlandaskan Iman dan Ilmu</h3>
        </div>

        <div id="detail-visi-misi" class="row g-4 mb-5 pt-5">
            <div class="col-lg-6">
                <div class="card card-custom h-100 shadow-sm p-4 border-0 ">
                    <div class="d-flex align-items-center bg-blue rounded-pill p-1 mb-4 pill-heading">
                        <img src="{{ asset('Admin/img/profil/logo-sekolah.jpg') }}" class="rounded-circle bg-white p-1" style="width: 50px; height: 50px; object-fit: contain;" onerror="this.onerror=null; this.style.display='none';">
                        <h3 class="fw-bold mb-0 ms-3 text-white">VISI</h3>
                    </div>
                    <p class="text-muted">"{{ $profil->visi ?? 'Visi belum diatur' }}"</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-custom h-100 shadow-sm p-4 border-0">
                    <div class="d-flex align-items-center bg-blue rounded-pill p-1 mb-4 pill-heading">
                        <img src="{{ asset('Admin/img/profil/logo-sekolah.jpg') }}" class="rounded-circle bg-white p-1" style="width: 50px; height: 50px; object-fit: contain;" onerror="this.onerror=null; this.style.display='none';">
                        <h3 class="fw-bold mb-0 ms-3 text-white">MISI</h3>
                    </div>
                    <div class="text-muted" style="white-space: pre-line;">{{ $profil->misi ?? 'Misi belum diatur' }}</div>
                </div>
            </div>
        </div>

        <div id="detail-sejarah" class="row align-items-center py-5 border-top border-bottom bg-light bg-opacity-50 rounded-4">
            <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                <img src="{{ asset('Admin/img/profil/sekolah_depan.jpg') }}" class="img-fluid rounded-4 shadow-lg border border-white border-4" onerror="this.onerror=null; this.style.display='none';">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h2 class="fw-bold mb-4">Sejarah Sekolah</h2>
                <div class="text-muted" style="white-space: pre-line; text-align: justify;">{{ $profil->sejarah ?? 'Sejarah belum diatur' }}</div>
            </div>
        </div>
    </div>
</section>