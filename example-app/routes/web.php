<?php

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