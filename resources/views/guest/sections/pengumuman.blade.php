<section class="page-section bg-light" id="announcement">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Pengumuman</h2>
        </div>

        <ul class="mt-4">
            @foreach($pengumumans as $p)
                <li>{{ $p->judul }}</li>
            @endforeach
        </ul>
    </div>
</section>
