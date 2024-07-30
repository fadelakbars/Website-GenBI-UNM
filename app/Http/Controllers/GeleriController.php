<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GeleriController extends Controller
{
    public function index()
    {
        $client = new Client();
        $apiUrl = 'http://127.0.0.1:8000/api/getgaleri'; // Ubah URL sesuai dengan API yang digunakan

        try {
            // Mengakses API untuk mendapatkan data galeri
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);

            // Mengambil data galeri dan membatasi jumlah foto menjadi 12
            $galeriData = array_slice($data['data'], 0, 12);

            // Kirim data galeri ke view
            return view('landing.galeri', ['galeriData' => $galeriData]);
        } catch (\Exception $e) {
            // Menangani error jika API tidak dapat diakses
            return view('.landing.galeri', ['error' => 'Gagal memuat data galeri.']);
        }
    }
}
