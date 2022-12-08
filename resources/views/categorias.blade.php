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




                    

















