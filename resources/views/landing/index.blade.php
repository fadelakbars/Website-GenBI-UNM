<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="codepixer" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Watch</title>

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
      <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
      <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
      
  </head>
  <body>

    @include('partials.header')

    @include('partials.hero')
    
    @include('partials.tentang')
    
    @include('partials.berita_terbaru')

    {{-- <section class="home-about-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding home-about-left">
                <img class="img-fluid" src="img/PENDIDIKAN.jpg" alt="" />
            </div>
            <div class="col-lg-6 no-padding home-about-right"> --}}
                {{-- @foreach($data as $data) --}}
                    {{-- <h1>{{ $data['judul'] }}</h1>
                    <p><span>{{ $data['penulis'] }}<br>{{ $data['tanggal_publikasi'] }}</span></p>
                    <p>{{ $data['isi_berita'] }}</p> --}}
                {{-- @endforeach --}}
                {{-- <a class="text-uppercase primary-btn" href="{{ url('/berita-terbaru') }}">Selengkapnya</a>
            </div>
            </div>
        </div>
        </section> --}}

    @include('partials.daftar_berita')
    
    @include('partials.pengurus')

    @include('partials.galeri')
    
    @include('partials.footer')



    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('js/easing.min.js') }}"></script>
<script src="{{ asset('js/hoverIntent.js') }}"></script>
<script src="{{ asset('js/superfish.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
