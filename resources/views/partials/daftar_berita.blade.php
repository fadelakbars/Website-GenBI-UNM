<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Berita</h1>
                <p>Ikuti perkembangan terbaru GenBI UNM dan dapatkan informasi terkini tentang kegiatan, program, dan pencapaian kami.</p>
            </div>
        </div>
        <div class="row">
            @foreach($threeLatestNews as $news)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/detail-berita/' . $news['id']) }}" style="text-decoration: none; color: inherit;">
                        <div class="single-service">
                            <img src="{{ $news['gambar_url'] }}" alt="{{ $news['judul'] }}" class="img-fluid">
                            <h4>{{ $news['judul'] }}</h4>
                            <p style="margin-top: -15px"><small>{{ $news['penulis'] }}, {{ \Carbon\Carbon::parse($news['tanggal_publikasi'])->format('d M Y') }}</small></p>
                            <p>{!! $news['summary'] !!}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 header-text anu">
                <a class="primary-btn" href="{{ url('/daftar-berita') }}">Berita Lainnya</a>
            </div>
        </div>
    </div>
</section>
