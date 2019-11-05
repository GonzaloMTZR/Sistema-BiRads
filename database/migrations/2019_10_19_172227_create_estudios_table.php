<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('institucion');
            $table->text('entidad');
            $table->text('jurisdiccion');
            $table->text('municipio');
            $table->text('localidad');
            $table->text('unidadMedica');
            $table->text('clues');
            $table->date('fechaDeToma');
            $table->text('birads');
            $table->text('resultados');
            $table->longText('archivo')->nullable();
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
        Schema::dropIfExists('estudios');
    }
}
