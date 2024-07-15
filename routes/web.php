<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/pengumuman', function () {
    return view('landing.pengumuman');
});

Route::get('/tentang', function () {
    return view('landing.tentang');
});

Route::get('/berita-terbaru', function () {
    return view('landing.berita_terbaru');
});

Route::get('/daftar-berita', function () {
    return view('landing.daftar_berita');
});

Route::get('/detail-berita', function () {
    return view('landing.detail_berita');
});

