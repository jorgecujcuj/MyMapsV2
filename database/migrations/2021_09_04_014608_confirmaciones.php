<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Confirmaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('confirmaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idprogramado');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('abastecida');
            $table->string('descripcion');
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
        //
        Schema::dropIfExists('confirmaciones');
    }
}
