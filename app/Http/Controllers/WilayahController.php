<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WilayahController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.gate.sijantankotaku.co.id/api_alpha/wilayah/list');
        $jsonData = $response->json();

        $wilayahs = $jsonData['data'];
        return view('wilayah.index')->with('wilayahs', $wilayahs);
    }
}
