<section class="home-about-area">
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
    <div class="col-lg-6 no-padding home-about-left">
        <img class="img-fluid" src="{{ asset('storage/' . $data['gambar']) }}" alt="gambar berita" />
    </div>
    <div class="col-lg-6 no-padding home-about-right">
            <h1>{{ $data['judul'] }}</h1>
            <p><span>{{ $data['penulis'] }}<br>{{ $data['tanggal_publikasi'] }}</span></p>
            <div class="">
                {!! $data['summary'] !!}
            </div>
        <a class="text-uppercase primary-btn" href="{{ url('/berita-terbaru') }}">Selengkapnya</a>
    </div>
    </div>
</div>
</section>
