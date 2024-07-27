<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index()
    {
        $client = new Client();

        // API URLs
        $beritaApiUrl = "http://127.0.0.1:8000/api/api/berita";
        $backgroundApiUrl = "http://127.0.0.1:8000/api/listbackground";

        try {
            // Mengakses API Berita
            $beritaResponse = $client->get($beritaApiUrl);
            $beritaResponseData = json_decode($beritaResponse->getBody(), true);
            $beritaData = $beritaResponseData['data'];

            usort($beritaData, function($a, $b) {
                return strtotime($b['tanggal_publikasi']) - strtotime($a['tanggal_publikasi']);
            });

            $latestNews = $beritaData[0] ?? null;

            if ($latestNews) {
                $latestNews['summary'] = Str::limit($latestNews['isi_berita'], 450);
                $latestNews['gambar_url'] = url('storage/' . $latestNews['gambar']);
            }

            // Mengakses API Background
            $backgroundResponse = $client->get($backgroundApiUrl);
            $backgroundResponseData = json_decode($backgroundResponse->getBody(), true);
            $backgroundImages = array_map(function($item) {
                return url('storage/' . $item['background']);
            }, $backgroundResponseData['data']);

            return view('landing.index', [
                'data' => $latestNews,
                'backgroundImages' => $backgroundImages,
            ]);
        } catch (\Exception $e) {
            return view('landing.index', ['error' => $e->getMessage()]);
        }
    }

    public function show_berita_terbaru()
    {
        $client = new Client();
        $apiUrl = "http://127.0.0.1:8000/api/api/berita";

        try {
            $response = $client->get($apiUrl);
            $responseData = json_decode($response->getBody(), true);
            $data = $responseData['data'];

            usort($data, function($a, $b) {
                return strtotime($b['tanggal_publikasi']) - strtotime($a['tanggal_publikasi']);
            });
            
            $latestNews = $data[0];
            
            if ($latestNews) {
                $latestNews['gambar_url'] = url('storage/' . $latestNews['gambar']);
            }

            return view('landing.berita_terbaru', ['data' => $latestNews]);
        } catch (\Exception $e) {
            return view('landing.berita_terbaru', ['error' => $e->getMessage()]);
        }
    }
}
