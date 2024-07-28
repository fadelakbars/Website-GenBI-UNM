<header id="header" id="home" style="background: #04091ee6">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
            <a href="{{ url('/') }}" class="nav-menu" style="color: aliceblue;color: aliceblue; font-size: 20px; font-weight: bold "><img src="{{ asset('img/logogenbiunm_crop_bulan.png') }}" alt="" title="" style="width: 40px; margin-right: 20px"/>GenBI UNM</a>
            
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
            <li class="menu-active"><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('/tentang') }}">Tentang</a></li>
            <li><a href="{{ url('/daftar-berita') }}">Berita</a></li>
            <li><a href="{{ url('/') }}">Galeri</a></li>
            <li class="menu-has-children">
                <a href="">Lainnya</a>
                <ul>
                <li><a href="{{ url('/daftar-pengurus') }}">Pengurus</a></li>
                <li><a href="elements.html">Alumni</a></li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    </div>
    </header>