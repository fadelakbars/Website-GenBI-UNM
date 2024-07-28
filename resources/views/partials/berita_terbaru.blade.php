<section class="home-about-area section-gap">
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
    <div class="col-lg-5 no-padding home-about-left">
        <img class="img-fluid rounded" src="{{ asset('storage/' . $data['gambar']) }}" alt="gambar berita" />
    </div>
    <div class="col-lg-6 no-padding home-about-right">
            <h2>{{ $data['judul'] }}</h2>
            <p><span>{{ $data['penulis'] }}<br>{{ $data['tanggal_publikasi'] }}</span></p>
            <div class="">
                {!! $data['summary'] !!}
            </div>
        <a class="text-uppercase primary-btn" href="{{ url('/berita-terbaru') }}">Selengkapnya</a>
    </div>
    </div>
</div>
</section>
