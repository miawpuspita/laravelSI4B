<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function up():void
     {
        Schema::create('mahasiswas', function
        (Blueprint $table){
            $table->id();
            $table->char('npm',10);
            $table->string('nama',45);
            $table->string('tempat_lahir',45);
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->unsignedBigInteger('prodi_id');
            $table->foreign('prodi_id')->references('id')->on('prodis');
            $table->string('url_foto');
            $table->timestamps();
            
        });

 }
    public function index()
    {
        
        $mahasiswa = Mahasiswa::all(); // select *from fakultas
        return view('mahasiswa.index')
                ->with('mahasiswa', $mahasiswa);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama' => "required",
            'npm' => "required|unique:mahasiswas",
            'tempat_lahir'=> "required",
            'tanggal_lahir'=> "required",
            'alamat'=> "required",
            'url_foto'=> "required|file|mimes:png,jpg|max:5000",
            'prodi_id'=> "required"

        ]);

        // ekstensi file yg diupload
        $ext =$request->url_foto->getClientOriginalExtension();
        //rename misal:npm.extensi 2226240001.png
        $val['url_foto']=$request->npm.".".$ext;
        //upload kedalam folder public/foto
        $request->url_foto->move('foto',$val['url_foto']);
    

    Mahasiswa::create($val);

    return redirect()->route('mahasiswa.index')->with('success', $val['nama'].' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function destory(Mahasiswa $mahasiswa)
    {
        //dd(@mahasiswa);
        $mahasiswa->delete(); // hapus data mahasiswa
        return redirect()->route('mahasiswa.index')->with('success','data berhasil di hapus.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
