<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Profil Sekolah</h2>
        </div>
        <p class="text-center mt-4">
            {{ $profil->deskripsi ?? 'Profil sekolah belum tersedia.' }}
        </p>
    </div>
</section>

<section class="page-section bg-light" id="tugas-tanggung-jawab">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Tugas & Tanggung Jawab</h2>
            <h3 class="section-subheading text-muted">
                Struktur Organisasi SMP Budi Mulia Pangururan
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark text-center">
                                    <tr>
                                        <th style="width: 5%">No</th>
                                        <th style="width: 20%">Jabatan</th>
                                        <th style="width: 25%">Nama Guru/Staf</th>
                                        <th style="width: 50%">Uraian Tugas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="fw-bold">Kepala Sekolah</td>
                                        <td>Fransiskus Sarwedi Sirait, B.M., M.Pd.</td>
                                        <td>
                                            Bertanggung jawab penuh atas seluruh kegiatan operasional sekolah,
                                            kurikulum, dan manajemen guru.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="fw-bold">Bagian Kurikulum</td>
                                        <td>Darwin Turnip, S.Pd</td>
                                        <td>
                                            Menyusun jadwal pelajaran, kalender akademik,
                                            dan memantau proses belajar mengajar.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="fw-bold">Bagian Kesiswaan</td>
                                        <td>Cosmas Ginting, S.Pd</td>
                                        <td>
                                            Mengelola kedisiplinan siswa, kegiatan OSIS,
                                            dan ekstrakurikuler.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="fw-bold">Waka Sarpras</td>
                                        <td>Marusaha E. Tambunan, S.Pd</td>
                                        <td>Mengelola inventaris sekolah, perawatan gedung, dan fasilitas belajar.</td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="fw-bold">Tata Usaha</td>
                                        <td>Setmelita Simanjuntak</td>
                                        <td>
                                            Mengurus administrasi sekolah, surat-menyurat,
                                            dan pendataan siswa.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="text-muted mt-4 text-center">
                            Struktur organisasi ini disusun untuk memperjelas pembagian tugas dan
                            tanggung jawab dalam mendukung kegiatan akademik dan non-akademik
                            di SMP Budi Mulia Pangururan.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>