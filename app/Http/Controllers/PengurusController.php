<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PengurusController extends Controller
{
    public function index()
    {
        // Ambil data dari API
        $response = Http::get('http://127.0.0.1:8000/api/getpengurus');
        $data = $response->json()['data'];

        // Kelompokkan berdasarkan periode
        $periodeData = [];
        foreach ($data as $item) {
            $periode = $item['periode'];
            $deputi = $item['deputi'];
            
            if (!isset($periodeData[$periode])) {
                $periodeData[$periode] = [];
            }

            if (!isset($periodeData[$periode][$deputi])) {
                $periodeData[$periode][$deputi] = [];
            }

            $periodeData[$periode][$deputi][] = $item;
        }

        // Ambil periode yang aktif (misalnya periode terakhir)
        $periodeKeys = array_keys($periodeData);
        $activePeriode = end($periodeKeys);

        return view('landing.pengurus', [
            'activePeriode' => $activePeriode,
            'pengurusData' => $periodeData[$activePeriode]
        ]);
    }
}
