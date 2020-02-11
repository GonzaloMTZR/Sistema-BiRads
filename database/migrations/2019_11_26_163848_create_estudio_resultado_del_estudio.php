<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudioResultadoDelEstudio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudio_resultado_del_estudio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estudio_id');
            $table->foreign('estudio_id')->references('id')->on('estudios')->onDelete('cascade');

            $table->unsignedBigInteger('resultado_del_estudio_id');
            $table->foreign('resultado_del_estudio_id')->references('id')->on('resultado_del_estudios')->onDelete('cascade');
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
        Schema::dropIfExists('estudio_resultado_del_estudio');
    }
}
