<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\VideosController;


Route::apiResource('videos', VideosController::class);
Route::apiResource('categorias', CategoriasController::class);



