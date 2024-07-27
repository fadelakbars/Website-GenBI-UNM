<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

            usort($data, function($a, $b) {
                return strtotime($b['tanggal_publikasi']) - strtotime($a['tanggal_publikasi']);
            });
            
            $latestNews = $data[0];
            
            if ($latestNews) {
                $latestNews['summary'] = Str::limit($latestNews['isi_berita'], 450);
                $latestNews['gambar_url'] = url('storage/' . $latestNews['gambar']);
            }

            return view('landing.index', ['data' => $latestNews]);
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
