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
    use App\Http\Controllers\PesquisaController;

     $itensP = videos::where('id_categoria',$id)->get(); 

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






      @foreach ($itensP as $categoria)

  <ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">live_tv</i>
      {{$categoria->nome}}
      <span class="new badge"> | </span></div>
    <div class="collapsible-body">
   
    <p><b>Descrição: </b>{{$categoria->descricao}}</p>

    <p><b>Link: </b>{{$categoria->link}}</p>

    <?php $embarcado=$categoria->embarcado; ?>

    <p><?php echo $embarcado; ?></p>


    <p><b>Status: </b>{{$categoria->status}}</p>

  
  
  </div>
  </li>
 </ul>

 @endforeach




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

  
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="../js/init.js"></script>
    <script src="../js/materialize.js"></script>

  </body>
</html>
