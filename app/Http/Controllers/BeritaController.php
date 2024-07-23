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

            return view('landing.index', ['data' => $data]);
        } catch (\Exception $e) {
            return view('landing.index', ['error' => $e->getMessage()]);
        }

    }

}
