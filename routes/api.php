<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\VideosController;


Route::apiResource('Videos', VideosController::class);
Route::apiResource('Categorias', CategoriasController::class);



