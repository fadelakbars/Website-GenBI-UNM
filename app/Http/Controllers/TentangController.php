<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class TentangController extends Controller
{
    public function detail_tentang()
    {
        $client = new Client();
        $apiUrl = "http://127.0.0.1:8000/api/gettentang";

        try {
            $response = $client->get($apiUrl);
            $responseData = json_decode($response->getBody(), true);
            $data = $responseData['data'];

            // usort($data, function($a, $b) {
            //     return strtotime($b['tanggal_publikasi']) - strtotime($a['tanggal_publikasi']);
            // });
            
            $latestNews = $data[0];
            
            // if ($latestNews) {
            //     $latestNews['gambar_url'] = url('storage/' . $latestNews['gambar']);
            // }

            return view('landing.tentang', ['data' => $latestNews]);
        } catch (\Exception $e) {
            return view('landing.tentang', ['error' => $e->getMessage()]);
        }
    }
}
