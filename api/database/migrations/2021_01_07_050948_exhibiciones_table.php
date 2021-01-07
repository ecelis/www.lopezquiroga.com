<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExhibicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('exhibiciones')) {
        Schema::create('exhibiciones', function (Blueprint $table) {
          $table->id();
          $table->string('nombre');
          $table->text('artistas');
          $table->text('descripcion');
          $table->dateTimeTz('inicio', $precision = 0);
          $table->dateTimeTz('fin', $precision = 0);
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
        Schema::dropIfExists('exhibiciones');
    }
}
