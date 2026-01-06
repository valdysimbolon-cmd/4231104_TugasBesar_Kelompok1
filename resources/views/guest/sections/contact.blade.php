<div class="integrated-section">
    <section class="pt-5 pb-0" id="contact">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="text-primary-custom fw-bold text-uppercase spacing-2">KONTAK</span>
                <h2 class="display-5 fw-bold text-dark mb-3">Hubungi Kami</h2>
                <p class="lead text-muted">Silahkan hubungi kami atau kunjungi lokasi SMP Budi Mulia</p>
                <div class="header-line-blue mx-auto mt-3"></div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    @php
                        $alamat_teks = $kontak->alamat ?? 'Pardomuan I, Kec. Pangururan, Kabupaten Samosir, Sumatera Utara';
                        $google_maps_url = "https://www.google.com/maps/search/?api=1&query=" . urlencode($alamat_teks);
                    @endphp
                    <a href="{{ $google_maps_url }}" target="_blank" class="text-decoration-none card-link">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center contact-card">
                            <div class="icon-box mb-3 mx-auto d-flex align-items-center justify-content-center icon-circle">
                                <i class="fas fa-map-marker-alt fa-2x text-primary-custom"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-dark">Alamat Sekolah</h5>
                            <p class="text-muted mb-0 small">{{ $alamat_teks }}</p>
                            <small class="text-primary-custom mt-2 d-block underline-hover">Lihat di Google Maps &raquo;</small>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="tel:{{ $kontak->no_telp ?? '(0626)20770' }}" class="text-decoration-none card-link">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center contact-card">
                            <div class="icon-box mb-3 mx-auto d-flex align-items-center justify-content-center icon-circle">
                                <i class="fas fa-phone-alt fa-2x text-primary-custom"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-dark">Layanan Telepon</h5>
                            <p class="text-muted mb-0 small">{{ $kontak->no_telp ?? '(0626)20770' }}</p>
                            <small class="text-primary-custom mt-2 d-block underline-hover">Hubungi Sekarang &raquo;</small>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="mailto:{{ $kontak->email ?? 'info@smpbudimuliapangururan.sch.id' }}" class="text-decoration-none card-link">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center contact-card">
                            <div class="icon-box mb-3 mx-auto d-flex align-items-center justify-content-center icon-circle">
                                <i class="fas fa-envelope fa-2x text-primary-custom"></i>
                            </div>
                            <h5 class="fw-bold mb-3 text-dark">Email Resmi</h5>
                            <p class="text-muted mb-0 small">{{ $kontak->email ?? 'info@smpbudimuliapangururan.sch.id' }}</p>
                            <small class="text-primary-custom mt-2 d-block underline-hover">Kirim Email &raquo;</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 footer-border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start text-center small opacity-75">
                    Copyright &copy; SMP Budi Mulia {{ date('Y') }}
                </div>
                <div class="col-lg-4 my-3 my-lg-0 text-center">
                    <a class="btn btn-outline-light btn-social mx-2 rounded-circle hover-facebook" 
                       href="https://www.facebook.com/groups/444372548996251/?ref=share&mibextid=KtfwRi" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-2 rounded-circle hover-instagram" 
                       href="https://www.instagram.com/smpbmpangururan_official?igsh=ejF0ODE1b3MxZ3k0" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="col-lg-4 text-lg-end text-center small opacity-75">
                    Developed by <span class="text-info-custom fw-bold">Kelompok PSW IT Del</span>
                </div>
            </div>
        </div>
    </footer>
</div>