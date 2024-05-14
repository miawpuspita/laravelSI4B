<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;

// jika tidak ada maka muncul error
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('about',function(){
    return "halaman about";
});

route::get('profil',function(){
    return view('profil');
});

// route dengan parameter
Route::get('welcome/{salam}', function ($salam) {
    // return 'selamat ' . $salam;
    return view('salam')->with('viewsalam',$salam);
});

// route tanpa parameter listdata
// terdapat array list
Route::get('listdata',function() {
    $list = ["sistem informasi","informatika","manajemen"];
    $listmhs= [
        ["npm"=> 001, "nama" => "ahmad"],
        ["npm"=> 002, "nama" => "budi"]
    ];
    return view('listprodi')
    -> with ('viewlist',$list)
    -> with ('viewmhs',$listmhs);
});

route::resource('fakultas',
FakultasController::class);
route::resource('prodi',
ProdiController::class);
