<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index')
                ->with('mahasiswa', $mahasiswa);

>>>>>>> 9bc1e05f6068226adacc9d041858fc48f1880447
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('mahasiswa.create');
=======
        $prodi = Prodi::all();
        return view('mahasiswa.create')->with('prodi',$prodi);
>>>>>>> 9bc1e05f6068226adacc9d041858fc48f1880447
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $val = $request->validate([
            'nama' => "required|unique:mahasiswa",
            'singkatan' => "required|max:4"
        ]);
    

    Mahasiswa::create($val);

    return redirect()->route('mahasiswa.index')->with('success', $val['nama'].' berhasil disimpan');
=======
        // return $request;

        $val = $request->validate([
           'npm' => "required|max:10", 
            'nama' => "required",
            'tempat_lahir' => "required", 
            'tanggal_lahir' => "required", 
            'alamat' => "required", 
            'prodi_id' => "required",
            'url_foto' => "required|file|mimes:png,jpg|max:5000" // untuk foto
        ]);

        // extensi file yang di aploud
        $ext = $request->url_foto->getClientOriginalExtension();
        // rename misal: npm.extensi 2226240001.png
        $val['url_foto'] = $request->npm.".".$ext;
        // upload ke dalam folder public/foto
        $request->url_foto->move('foto', $val['url_foto']);

        // simpan tabel fakultas
        Mahasiswa::create($val);

        // // radirect ke halaman list fakultas
        return redirect()->route('mahasiswa.index')->with('success', $val['nama']. 'berhasil disimpan');
>>>>>>> 9bc1e05f6068226adacc9d041858fc48f1880447
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
<<<<<<< HEAD
        //
=======
        $prodi = Prodi::all();
        return view('mahasiswa.edit')
        ->with('prodi',$prodi)
        ->with('mahasiswa', $mahasiswa);
>>>>>>> 9bc1e05f6068226adacc9d041858fc48f1880447
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
<<<<<<< HEAD
        //
    }

=======
       // dd($mahasiswa);

       if($request->url_foto) {

        $val = $request->validate([
        //'npm' => "required|max:10", 
            'nama' => "required",
            'tempat_lahir' => "required", 
            'tanggal_lahir' => "required", 
            'alamat' => "required", 
            'prodi_id' => "required",
            'url_foto' => "required|file|mimes:png,jpg|max:5000" // untuk foto
       ]);
    

         // extensi file yang di aploud
        $ext = $request->url_foto->getClientOriginalExtension();
        // rename misal: npm.extensi 2226240001.png
        $val['url_foto'] = $request->npm.".".$ext;
        // upload ke dalam folder public/foto
        $request->url_foto->move('foto', $val['url_foto']);

        } else{ 
             $val = $request->validate([
            //'npm' => "required|max:10", 
            'nama' => "required",
            'tempat_lahir' => "required", 
            'tanggal_lahir' => "required", 
            'alamat' => "required", 
            'prodi_id' => "required",
            'url_foto' => "required|file|mimes:png,jpg|max:5000" // untuk foto
        ]);
    }

        // simpan tabel fakultas
        Mahasiswa::where('id', $mahasiswa ['id'])->update($val);

        // // radirect ke halaman list fakultas
        return redirect()->route('mahasiswa.index')->with('success', $val['nama']. 'berhasil disimpan');
    }

    

>>>>>>> 9bc1e05f6068226adacc9d041858fc48f1880447
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
<<<<<<< HEAD
        //
=======
        //dd($mahasiswa);
        File::delete('foto/'. $mahasiswa['url_foto']);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success','Data berhasil dihapus.');
    }
}

