<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fakultas;
class FakultasController extends Controller
{
    public function index()
    {
        $fakultas = Fakultas::all();
        if ($fakultas->isEmpty()) {
            $response['message'] = 'Tidak ada fakultas yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'Fakultas ditemukan.';
        $response['data'] = $fakultas;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }
    public function store(Request $request)
{
    $validate = $request->validate([
        'nama' => 'required|unique:fakultas',
        'singkatan' => 'required|max:4'
    ]);

    $fakultas = Fakultas::create($validate);
    if($fakultas){
        $response['success'] = true;
        $response['message'] = 'Fakultas berhasil ditambahkan.';
        return response()->json($response, Response::HTTP_CREATED);
    }
}

}
public function store(Request $request)
{
    $validate = $request->validate([
        'nama' => 'required|unique:fakultas',
        'singkatan' => 'required|max:4'
    ]);

    $fakultas = Fakultas::create($validate);
    if($fakultas){
        $response['success'] = true;
        $response['message'] = 'Fakultas berhasil ditambahkan.';
        return response()->json($response, Response::HTTP_CREATED);
    }
}
