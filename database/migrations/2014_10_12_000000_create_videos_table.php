<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('id_categoria');
            $table->string('nome');
            $table->string('descricao');
            $table->string('link');
            $table->string('embarcado');
            $table->string('status');
            $table->timestamps();
        });
    }



    public function down()
    {
       Schema::dropIfExists('videos');
    }
}
