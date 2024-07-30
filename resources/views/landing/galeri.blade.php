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
        .center-content {
            text-align: center;
        }
        .center-content .about-title {
            margin-bottom: 30px;
        }
        .gallery-img {
            cursor: pointer;
            transition: transform 0.2s;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }
    </style>
</head>
<body>
    
    @include('partials.header2')
    
    <section class="service-area section-gap" id="galeri">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-40 header-text">
                    <h1>Galeri</h1>
                    <p>Dokumentasi kegiatan dan momen-momen GenBI UNM</p>
                </div>
            </div>
            <div class="row">
                @foreach($galeriData as $galeri)
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('storage/' . $galeri['foto']) }}" class="img-fluid gallery-img" alt="{{ $galeri['deskripsi'] }}" data-toggle="modal" data-target="#photoModal" data-src="{{ asset('storage/' . $galeri['foto']) }}" data-deskripsi="{{ $galeri['deskripsi'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="">
                    <p id="modalDeskripsi" class="mt-3"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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

    <script>
        $(document).ready(function() {
            $('#photoModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var src = button.data('src');
                var deskripsi = button.data('deskripsi');
                var modal = $(this);
                modal.find('#modalImage').attr('src', src);
                modal.find('#modalDeskripsi').text(deskripsi);
            });
        });
    </script>
</body>
</html>
