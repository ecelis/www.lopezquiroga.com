<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('publicaciones')) {
        Schema::create('publicaciones', function (Blueprint $table) {
          $table->id();
          $table->string('nombre');
          $table->string('descripcion');
          $table->tinyInt('activo');
          $table->dateTimeTz('publicado', $precision = 0);
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
        Schema::dropIfExists('publicaciones');
    }
}
