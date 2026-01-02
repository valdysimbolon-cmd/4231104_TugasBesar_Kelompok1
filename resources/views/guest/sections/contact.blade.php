<section class="page-section" id="contact" style="background: #212529;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase text-white">Hubungi Kami</h2>
            <h3 class="section-subheading text-muted">Lokasi Kami di Pangururan, Samosir</h3>
        </div>
        <div class="row text-center text-white g-4">
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-white bg-opacity-10 h-100 border border-secondary border-opacity-25">
                    <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Alamat</h5>
                    <p class="small opacity-75">{{ $kontak->alamat ?? 'Alamat belum diatur' }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-white bg-opacity-10 h-100 border border-secondary border-opacity-25">
                    <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Telepon</h5>
                    <p class="small opacity-75">{{ $kontak->no_telp ?? 'Telepon belum diatur' }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-white bg-opacity-10 h-100 border border-secondary border-opacity-25">
                    <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Email</h5>
                    <p class="small opacity-75">{{ $kontak->email ?? 'Email belum diatur' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>