<section class="page-section" id="news">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Berita</h2>
        </div>

        <div class="row mt-4">
            @foreach($beritas as $b)
            <div class="col-md-4">
                <h5>{{ $b->judul }}</h5>
                <p>{{ Str::limit($b->isi, 100) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
