<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $client = new Client();

        // API URLs
        $beritaApiUrl = "http://127.0.0.1:8000/api/api/berita";
        $backgroundApiUrl = "http://127.0.0.1:8000/api/listbackground";
        $tentangUrl = "http://127.0.0.1:8000/api/gettentang";
        $eventUrl = "http://127.0.0.1:8000/api/getevent";
        $galeriUrl = "http://127.0.0.1:8000/api/getgaleri";

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
            $threeLatestNews = array_slice($beritaData, 1, 3);

            if ($latestNews) {
                $latestNews['summary'] = Str::limit($latestNews['isi_berita'], 450);
                $latestNews['gambar_url'] = url('storage/' . $latestNews['gambar']);
            }

            foreach ($threeLatestNews as &$news) {
                $news['summary'] = Str::limit($news['isi_berita'], 150);
                $news['gambar_url'] = url('storage/' . $news['gambar']);
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

            usort($events, function($a, $b) {
                return strtotime($b['tanggal_kegiatan']) - strtotime($a['tanggal_kegiatan']);
            });

            // Batasi jumlah event yang ditampilkan menjadi dua
            $limitedEvents = array_slice($events, 0, 2);

            // Mengakses API Galeri
            $galeriResponse = $client->get($galeriUrl);
            $galeriResponseData = json_decode($galeriResponse->getBody(), true);
            $galeriData = array_map(function($item) {
                return [
                    'foto' => url('storage/' . $item['foto']),
                    'deskripsi' => $item['deskripsi']
                ];
            }, $galeriResponseData['data']);

            return view('landing.index', [
                'latestNews' => $latestNews,
                'threeLatestNews' => $threeLatestNews,
                'backgroundImages' => $backgroundImages,
                'tentangGenBI' => $tentangData,
                'events' => $limitedEvents,
                'galeriData' => $galeriData,
            ]);
        } catch (\Exception $e) {
            return view('landing.index', ['error' => $e->getMessage()]);
        }
    }
}

