<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GeleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/berita-terbaru', [BeritaController::class, 'show_berita_terbaru']);

Route::get('/pengumuman', [PengumumanController::class, 'lihat_pengumuman']);

Route::get('/tentang', [TentangController::class, 'detail_tentang']);

Route::get('/detail-berita/{id}', [BeritaController::class, 'showDetailBerita'])->name('detail-berita');

Route::get('/daftar-berita', [BeritaController::class, 'daftarBerita'])->name('daftar-berita');

Route::get('/galeri', [GeleriController::class, 'index']);


// Route::get('/daftar-berita', function () {
//     return view('landing.daftar_berita');
// });

// Route::get('/detail-berita', function () {
//     return view('landing.detail_berita');
// });

Route::get('/daftar-pengurus', function () {
    return view('landing.pengurus');
});

