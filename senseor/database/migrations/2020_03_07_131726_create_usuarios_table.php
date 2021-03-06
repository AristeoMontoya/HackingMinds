<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('clave_usuario')->unsigned();
            $table->unsignedBigInteger('rol_id');
            $table->char('Nombre_usuarios',100);
            $table->bigInteger('Casa')->unsigned();
            $table->char('telefono',20);
            $table->foreign('Casa')->references('clave_casa')->on('casas');
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->timestamps();
        });
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
