<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Programados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('programados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idsolicitud');
            $table->string('operador');
            $table->string('estado');
            $table->bigInteger('idfinca');
            $table->bigInteger('idunidad');
            $table->timestamps('salida');
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
        Schema::dropIfExists('programados');
    }
}
