<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/elements/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Daftar Pengurus</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!-- CSS -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">         
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .owl-carousel .item {
            text-align: center;
            margin: 0 5px; /* Jarak antar item */
            width: 180px; /* Lebar item untuk menampilkan 5 item dalam satu slide */
            /* Lebar yang disarankan untuk menampilkan 5 item dalam satu slide, sesuaikan dengan kebutuhan */
            box-sizing: border-box; /* Untuk memastikan padding dan border tidak mempengaruhi lebar item */
        }
        .owl-carousel .item img {
            max-height: 150px; /* Sesuaikan tinggi gambar jika perlu */
            width: 100%; /* Menyesuaikan gambar dengan lebar item */
            object-fit: cover; /* Memastikan gambar menutupi area item dengan baik */
        }
        .owl-carousel .item h5 {
            margin-top: 10px;
            font-size: 1rem; /* Sesuaikan ukuran font jika perlu */
        }
        .owl-carousel .item p {
            font-size: 0.875rem; /* Sesuaikan ukuran font jika perlu */
        }
    
        @media (max-width: 768px) {
            .owl-carousel .item {
                width: 120px; /* Lebar item untuk tampilan pada layar kecil */
            }
        }
    </style>
    
    
</head>
<body>
    
    @include('partials.header2')
    
    <section class="team-area section-gap" id="pengurus">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-40 header-text text-center">
                    <h1>Daftar Pengurus Periode {{ $activePeriode }}</h1>
                </div>
            </div>
            @foreach($pengurusData as $deputi => $pengurus)
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2>{{ $deputi }}</h2>
                    </div>
                    <div class="owl-carousel deputi-carousel">
                        @foreach($pengurus as $person)
                            <div class="item">
                                <img src="{{ asset('storage/' . $person['foto']) }}" class="img-fluid" alt="{{ $person['jabatan'] }}" data-toggle="modal" data-target="#fotoModal-{{ $person['id'] }}">
                                <h5>{{ $person['jabatan'] }}</h5>
                                <p>{{ $person['nama'] }}</p>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="fotoModal-{{ $person['id'] }}" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel-{{ $person['id'] }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fotoModalLabel-{{ $person['id'] }}">{{ $person['jabatan'] }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('storage/' . $person['foto']) }}" class="img-fluid" alt="{{ $person['jabatan'] }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    @include('partials.footer2')

    <!-- Scripts -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>         
    <script src="js/easing.min.js"></script>         
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>    
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>         
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>         
    <script src="js/parallax.min.js"></script>  
    <script src="js/mail-script.js"></script>               
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 5, // Jumlah item yang ditampilkan per slide
                margin: 10, // Jarak antar item
                loop: true, // Loop carousel
                autoplay: true, // Autoplay
                autoplayTimeout: 3000, // Waktu autoplay dalam milidetik
                autoplayHoverPause: true, // Pause autoplay saat hover
                nav: true, // Menampilkan navigasi prev/next
                dots: false, // Menyembunyikan dot
                responsive: {
                    0: {
                        items: 1 // 1 item per slide pada layar kecil
                    },
                    600: {
                        items: 3 // 3 item per slide pada layar medium
                    },
                    1000: {
                        items: 5 // 5 item per slide pada layar besar
                    }
                }
            });
        });
    </script>
    
</body>
</html>
