<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('fotos')) {
        Schema::create('fotos', function (Blueprint $table) {
          $table->id();
          $table->string('titulo');
          $table->string('extension');
          $table->text('comentarios');
          $table->text('meta');
          $table->integer('artista_id');
          $table->integer('exhibicion_id');
          $table->integer('coleccion_id');
          $table->integer('publicacion_id');
          $table->dateTimeTz('creado', $precision = 0);
          $table->dateTimeTz('modificado', $precision = 0);
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
