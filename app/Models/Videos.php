<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_categoria', 'nome', 'descricao','link','embarcado','status'
    ];

	

}



$table->string('id_categoria');
$table->string('nome');
$table->string('descricao');
$table->string('link');
$table->string('embarcado');
$table->string('status');