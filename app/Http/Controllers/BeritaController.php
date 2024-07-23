<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BeritaController extends Controller
{
    public function index()
    {
        $client = new Client();
        $apiUrl = "http://127.0.0.1:8000/api/api/berita";

        try {
            $response = $client->get($apiUrl);
            $responseData = json_decode($response->getBody(), true);
            $data = $responseData['data'];

            // Urutkan data berdasarkan tanggal_publikasi secara menurun
            usort($data, function($a, $b) {
                return strtotime($b['tanggal_publikasi']) - strtotime($a['tanggal_publikasi']);
            });

            // Ambil berita paling terbaru
            $latestNews = $data[0];

            return view('landing.index', ['data' => $latestNews]);
        } catch (\Exception $e) {
            return view('landing.index', ['error' => $e->getMessage()]);
        }
    }
}
