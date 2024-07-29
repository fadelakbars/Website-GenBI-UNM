<section class="home-about-area section-gap">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 no-padding home-about-left">
                <img class="img-fluid rounded" src="{{ $latestNews['gambar_url'] }}" alt="gambar berita" />
            </div>
            <div class="col-lg-6 no-padding home-about-right">
                <h2>{{ $latestNews['judul'] }}</h2>
                <p><span>{{ $latestNews['penulis'] }}<br>{{ $latestNews['tanggal_publikasi'] }}</span></p>
                <div class="">
                    {!! $latestNews['summary'] !!}
                </div>
                <a class="text-uppercase primary-btn" href="{{ url('/detail-berita/' . $latestNews['id']) }}">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
