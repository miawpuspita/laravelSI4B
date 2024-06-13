<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all(); // select *from fakultas
        return view('prodi.index')
                ->with('prodi', $prodi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('prodi.create');
        $fakultas = Fakultas::all();
        return view('prodi.create')->with('fakultas', $fakultas);
    }
    $fakultas = fakultas::all();
    return view('prodi.create')->with('fakultas', $fakultas);

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $val = $request->validate([
            'nama' => "required|unique:fakultas",
            'singkatan' => "required|max:4"
            'fakultas_id' => "required"
        ]);
    

    Prodi::create($val);
<<<<<<< HEAD
    
=======

>>>>>>> 9bc1e05f6068226adacc9d041858fc48f1880447
    return redirect()->route('prodi.index')->with('success', $val['nama'].' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
