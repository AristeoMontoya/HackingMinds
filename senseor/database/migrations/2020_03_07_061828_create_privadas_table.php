<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privadas', function (Blueprint $table) {
            $table->bigIncrements('clave_privada')->unsigned();
            $table->char('nombre_privada',100);
            $table->char('Dirección',50);
            $table->char('Telefono',30);
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
        Schema::dropIfExists('privadas');
    }
}
