<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Biblioteca Pessoal</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>



<?php
    use App\Models\Videos;
    $tabela = videos::all();
    use App\Http\Controllers\Sistema\PesquisaController;

    $itensP = videos::where('idcategoria',$id)->get(); 

?>


<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Biblioteca</a>
      <ul class="right hide-on-med-and-down">
      <!--
        <li><a href="#">Navbar Link</a></li>   
      -->
      </ul>
      <ul id="nav-mobile" class="sidenav">
      @foreach ($itensP as $categoria)
       <li> <a href="{{ url('pesquisa', ['id' => $categoria->id]) }}"> {{$categoria->nome}}</a></li>
        @endforeach

      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">   <?php  echo $id; ?> 
</h1>
      <div class="row center">
        <h5 class="header col s12 light"></h5>
      </div>
   
  
    @foreach ($tabela as $categoria)



  <div class="collection">
    <a href="{{ url('pesquisa', ['id' => $categoria->id]) }}" class="collection-item"><span class="badge">{{$categoria->id}}</span>{{$categoria->nome}}</a>
  </div>


  @endforeach
      <br><br>

    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
    </div>
  </footer>

  
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>
