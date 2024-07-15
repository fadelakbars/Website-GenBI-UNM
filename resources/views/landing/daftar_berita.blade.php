<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
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
    <title>Watch</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!-- CSS -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">         
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        /* Custom CSS for centering content */
        .center-content {
            text-align: center;
        }
        .center-content .about-title {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    @include('partials.header2')

    <section class="service-area section-gap" id="service">
        <div class="container">
            <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Berita</h1>
                <p>Ikuti perkembangan terbaru GenBI UNM dan dapatkan informasi terkini tentang kegiatan, program, dan pencapaian kami.</p>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/detail-berita') }}" style="text-decoration: none; color: inherit;">
                        <div class="single-service">
                            <img src="{{ asset('img/IMG_0217.jpg') }}" alt="" class="img-fluid">
                            <h4>GENBI TAKE ACTION ZERO WASTE ACTION: KURANGI DAN KELOLA SAMPAH</h4>
                            <p style="margin-top: -15px"><small>Author, 12 Mei 2024</small></p>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <img src="{{ asset('img/PENDIDIKAN.jpg') }}" alt="" class="img-fluid">
                        <h4>REPORT KEGIATAN CAPACITY BUILDING & LEADERSHIP PRACTICE</h4>
                        <p style="margin-top: -15px"><small>Author, 28 Juni 2024</small></p>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <img src="{{ asset('img/DSCF8289_1.jpg') }}" alt="" class="img-fluid">
                        <h4>REPORT KEGIATAN GENBI MENGAJAR 2023</h4>
                        <p style="margin-top: -15px"><small>Author, 12 Juli 2024</small></p>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <img src="{{ asset('img/DSCF8289_1.jpg') }}" alt="" class="img-fluid">
                        <h4>REPORT KEGIATAN GENBI MENGAJAR 2023</h4>
                        <p style="margin-top: -15px"><small>Author, 12 Juli 2024</small></p>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <img src="{{ asset('img/IMG_0217.jpg') }}" alt="" class="img-fluid">
                        <h4>GENBI TAKE ACTION ZERO WASTE ACTION: KURANGI DAN KELOLA SAMPAH</h4>
                        <p style="margin-top: -15px"><small>Author, 12 Mei 2024</small></p>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <img src="{{ asset('img/PENDIDIKAN.jpg') }}" alt="" class="img-fluid">
                        <h4>REPORT KEGIATAN CAPACITY BUILDING & LEADERSHIP PRACTICE</h4>
                        <p style="margin-top: -15px"><small>Author, 28 Juni 2024</small></p>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <img src="{{ asset('img/IMG_0217.jpg') }}" alt="" class="img-fluid">
                        <h4>GENBI TAKE ACTION ZERO WASTE ACTION: KURANGI DAN KELOLA SAMPAH</h4>
                        <p style="margin-top: -15px"><small>Author, 12 Mei 2024</small></p>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <img src="{{ asset('img/PENDIDIKAN.jpg') }}" alt="" class="img-fluid">
                        <h4>REPORT KEGIATAN CAPACITY BUILDING & LEADERSHIP PRACTICE</h4>
                        <p style="margin-top: -15px"><small>Author, 28 Juni 2024</small></p>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <img src="{{ asset('img/DSCF8289_1.jpg') }}" alt="" class="img-fluid">
                        <h4>REPORT KEGIATAN GENBI MENGAJAR 2023</h4>
                        <p style="margin-top: -15px"><small>Author, 12 Juli 2024</small></p>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
            </div>
        </div>
        </section>

        @include('partials.footer2')
        
    <!-- Scripts -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>         
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="js/easing.min.js"></script>         
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>    
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>   
    <script src="js/owl.carousel.min.js"></script>         
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>         
    <script src="js/parallax.min.js"></script>  
    <script src="js/mail-script.js"></script>               
    <script src="js/main.js"></script>   
</body>
</html>
