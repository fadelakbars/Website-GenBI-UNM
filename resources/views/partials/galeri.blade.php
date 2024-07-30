<section class="service-area section-gap" id="galeri">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Galeri</h1>
                <p>Dokumentasi kegiatan dan momen-momen GenBI UNM</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($galeriData as $index => $galeri)
                            <li data-target="#carouselExample" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach($galeriData as $index => $galeri)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <a href="{{ url('/galeri') }}">
                                    <img src="{{ asset($galeri['foto']) }}" class="d-block w-100" alt="{{ $galeri['deskripsi'] }}">
                                </a>
                                <div class="carousel-caption-custom">
                                    <p>{{ $galeri['deskripsi'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>