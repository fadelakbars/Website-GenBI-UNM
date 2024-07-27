<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BackgroundController extends Controller
{
    public function getBackgroundImages()
    {
        $apiUrl = "http://127.0.0.1:8000/api/listbackground";

        // Mengirim permintaan GET ke API
        $response = Http::get($apiUrl);
    
        // Memeriksa apakah permintaan berhasil
        if ($response->successful()) {
            // Mengambil daftar nama file gambar dari respons
            $responseData = $response->json();
            $backgroundImages = array_map(function($item) {
                return url('storage/' . $item['background']);
            }, $responseData['data']);
    
            // Mengembalikan data ke view
            return view('landing.index', ['backgroundImages' => $backgroundImages]);
        } else {
            // Menangani kesalahan jika permintaan tidak berhasil
            return response()->json(['error' => 'Unable to fetch background images'], 500);
        }
    }
}
