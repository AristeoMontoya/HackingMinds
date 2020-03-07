<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('clave_evento')->unsigned();
            $table->char('nombre_evento',100);
            $table->bigIncrements('Zona')->unsigned();
            $table->integer('numero_Invitados');
            $table->foreign('Zona')->references('clave_zona')->on('zonas');
             $table->dateTime('Fecha_evento', 0);
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
        Schema::dropIfExists('eventos');
    }
}
