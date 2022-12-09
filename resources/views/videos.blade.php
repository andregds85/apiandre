
<?php
    use App\Models\Categorias;
    $tabela = Categorias::all();

?>
      
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>nome</th>
        </tr>
	    @foreach ($tabela as $categoria)

        <tr>

            <td>{{$categoria->id}}</td>
	        <td>{{$categoria->nome}}</td>

        </tr>
	    @endforeach
    </table>








<?php
    use App\Models\Videos;
    $tabela = videos::all();

?>
      

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Videos</title>
  </head>
  <body>



 @foreach ($tabela as $video)

 <div class="card text-center">
  <div class="card-header">ID DA CATEGORIA
  {{$video->id_categoria}}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$video->nome}}
</h5>
    <p class="card-text">{{$video->descricao}}</p>
    <a href='{{$video->link}}'class="btn btn-primary">{{$video->nome}}</a>
  </div>
  <div class="container">
  <?php echo "{{$video->embarcado}}"; ?>  </div>

  <div class="card-footer text-muted">
  Status: {{$video->status}}
  </div>

</div>


	    @endforeach




    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


