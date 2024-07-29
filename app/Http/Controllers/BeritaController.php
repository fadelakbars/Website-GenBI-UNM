<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class BeritaController extends Controller
{
    public function showDetailBerita($id)
    {
        $client = new Client();
        $apiUrl = "http://127.0.0.1:8000/api/berita/{$id}";

        try {
            $response = $client->get($apiUrl);
            $responseData = json_decode($response->getBody(), true);
            $data = $responseData['data'];

            $data['gambar_url'] = url('storage/' . $data['gambar']);

            return view('landing.detail_berita', ['data' => $data]);
        } catch (\Exception $e) {
            return view('landing.detail_berita', ['error' => $e->getMessage()]);
        }
    }

    public function daftarBerita()
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
    
            $limitedNews = array_slice($data, 0, 12);
    
            foreach ($limitedNews as &$news) {
                $news['summary'] = Str::limit($news['isi_berita'], 150);
                $news['gambar_url'] = url('storage/' . $news['gambar']);
            }
    
            return view('landing.daftar_berita', ['news' => $limitedNews]);
        } catch (\Exception $e) {
            return view('landing.daftar_berita', ['error' => $e->getMessage()]);
        }
    }
    
}
