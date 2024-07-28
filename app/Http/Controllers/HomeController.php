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
        $tentangUrl = "http://127.0.0.1:8000/api/gettentang";
        $eventUrl = "http://127.0.0.1:8000/api/getevent";

        try {
            // Mengakses API Tentang GenBI
            $tentangResponse = $client->get($tentangUrl);
            $tentangResponseData = json_decode($tentangResponse->getBody(), true);
            $tentangData = $tentangResponseData['data'][0]['tentang_genbi'] ?? null;

            // Batasi panjang data tentang GenBI menjadi 400 karakter
            if ($tentangData) {
                $tentangData = Str::limit(strip_tags($tentangData), 400);
            }

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

            // Mengakses API Event
            $eventResponse = $client->get($eventUrl);
            $eventResponseData = json_decode($eventResponse->getBody(), true);
            $events = $eventResponseData['data'];

            return view('landing.index', [
                'data' => $latestNews,
                'backgroundImages' => $backgroundImages,
                'tentangGenBI' => $tentangData,
                'events' => $events,
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
