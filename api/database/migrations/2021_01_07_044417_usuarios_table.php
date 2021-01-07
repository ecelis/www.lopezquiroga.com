<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // We already have the dump from the old CakePHP app
        if (!Schema::hasTable('usuarios')) {
          Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('sombra');
            $table->string('nombre');
            $table->string('apellido');
            $table->tinyInteger('activo');
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
      Schema::dropIfExists('usuarios');
    }
}
