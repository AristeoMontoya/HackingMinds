<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolPermiso', function (Blueprint $table) {
            $table->unsignedBigInteger('rol');
            $table->unsignedBigInteger('permiso');
            
            $table->foreign('rol')->references('id')->on('roles');
            $table->foreign('permiso')->references('id')->on('permisos');
            
            $table->primary(['rol','permiso']);

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
        Schema::dropIfExists('rolPermiso');
    }
}
