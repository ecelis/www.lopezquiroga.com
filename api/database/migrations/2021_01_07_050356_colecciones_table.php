<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ColeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('colecciones')) {
        Schema::create('colecciones', function (Blueprint $table) {
          $table->id();
          $table->string('nombre');
          $table->text('descripcion');
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
        Schema::dropIfExists('colecciones');
    }
}
