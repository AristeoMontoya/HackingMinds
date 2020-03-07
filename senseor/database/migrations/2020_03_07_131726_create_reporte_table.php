<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('Fecha');
            $table->longText('Contenido');
            $table->char('Tipo', 1);
            $table->bigInteger('usuario_id')->unisgned();
            $table->foreign('usuario_id')->references('clave_admin')->on('administrador');
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
        Schema::dropIfExists('reporte');
    }
}