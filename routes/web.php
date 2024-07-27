<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/berita-terbaru', [BeritaController::class, 'show_berita_terbaru']);

// Route::get('/berita-terbaru', function () {
//     return view('landing.berita_terbaru');
// });

Route::get('/pengumuman', function () {
    return view('landing.pengumuman');
});

Route::get('/tentang', function () {
    return view('landing.tentang');
});


Route::get('/daftar-berita', function () {
    return view('landing.daftar_berita');
});

Route::get('/detail-berita', function () {
    return view('landing.detail_berita');
});

Route::get('/daftar-pengurus', function () {
    return view('landing.pengurus');
});

