<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    

  public function index()
  {
  
    return Categorias::all();
 
}

  public function store(Request $request)
  {
    Categorias::create($request->all());
  }

  
  /*

  public function show($id)
  {
    return Livros::findOrFail($id);
  }

  public function update(Request $request, $id)
  {
    $livros = Livros::findOrFail($id);
    $livros->update($request->all());
 
  }
  public function destroy($id)
  {
    $livros = Livros::findOrFail($id);
    $livros->delete();
  }

  */



}




     /*
      destroy = testa delete igual ao show 
      update = put   igual ao insert 
      store = post
      show = get 
      //
      /*  video exemplo
      https://www.youtube.com/watch?v=daq5S5-55Lw 
      */