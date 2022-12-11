<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesquisaController;



Route::get('/', function () {
    return view('inicio');
});


Route::get('/categorias', function () {
    return view('categorias');
});


Route::get('/videos', function () {
    return view('videos');
});


Route::get('/pesquisa/{v1}/', [PesquisaController::class,'index']);




/*
Route::get('/pesquisa/{id}', function () {
    return view('pesquisa');
});

*/


