<?php

namespace App\Http\Controllers;

use App\Http\Requests\JalanRequest;
use App\Models\Jalan;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Input\Input;

class JalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function __construct()
    // {
    //     $this->middleware('permission:jalan-read|jalan-create|jalan-edit|jalan-delete', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:jalan-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:jalan-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:jalan-delete', ['only' => ['destroy']]);
    // }



    // function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $jalans = Jalan::all();
        // return view('jalans.index', compact('jalans'));

        $response = Http::get('https://api.gate.sijantankotaku.co.id/public_alpha/street/');
        $jsonData = $response->json();

        // $jalans = json_decode((string)$response->getBody(), true);
        $jalans = $jsonData["data"];
        return view('jalans.index')->with('jalans', $jalans);


        // return view('jalans.index', compact('jalans'));
        // dd($jsonData);
        // dd($jsonData["data"]["list"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $response = Http::get('https://api.gate.sijantankotaku.co.id/api_alpha/wilayah/list');
        $jsonData = $response->json();

        $wilayahs = $jsonData['data']['kabupaten'][0];
        
        return view('wilayah.create')->with('wilayahs', $wilayahs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        // dd($data['no_ruas']);
        // dd($request);
        // Jalan::create($request->validated());

        // return redirect()->route('jalan.index');
        $options = [
            'data' =>
            [
                "no_ruas" => $data['no_ruas'],
                "id_kecamatan" => $data['id_kecamatan'],
                "nama_ruas" => $data['nama_ruas'],
                "patok_sta" => $data['patok_sta'],
                "geo_dms" => $data['geo_dms'],
                "geo_decimal" => $data['geo_decimal'],
                "panjang_jalan" => $data['panjang_jalan'],
                "lebar_jalan" => $data['lebar_jalan'],
            ],
            "type" => "object"
        ];

        $response = Http::post(
            'https://api.gate.sijantankotaku.co.id/api_alpha/street/create',
            $options
        );

        $jsonData = $response->json();
        // dd($jsonData);
        return redirect()->route('jalan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jalan  $jalan
     * @return \Illuminate\Http\Response
     */
    public function show(Jalan $jalan)
    {
        return view('jalans.show', compact('jalan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jalan  $jalan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jalan $jalan)
    {
        return view('jalans.edit', compact('jalan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jalan  $jalan
     * @return \Illuminate\Http\Response
     */
    public function update(JalanRequest $request, Jalan $jalan)
    {
        $jalan->update($request->validated());

        return redirect()->route('jalan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jalan  $jalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jalan $jalan)
    {
        $jalan->delete();

        return redirect()->route('jalan.index');
    }

    public function getstaId($id){

        $options = [
            'data' =>
            [
                "id" => $id,
            ],
            "type" => "numeric"
        ];
        
                
        $response = Http::post('https://api.gate.sijantankotaku.co.id/api_alpha/street/show', $options);
        $jsonData = $response->json();

        // $jalans = json_decode((string)$response->getBody(), true);
        



        // return view('jalans.index')->with('jalans', $jalans);
        // dd($jsonData);
        
        


        
        // dd($id);
                
        
        // return view('sta.create')->with('stas', $stas);
        // // $response = Http::put('https://api.gate.sijantankotaku.co.id/api_alpha/street-sta/create', $id)   
        
        return view('sta.create');

    }
}
