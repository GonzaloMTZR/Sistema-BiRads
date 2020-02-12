<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosClinicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_clinicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('menstruacion')->nullable();
            $table->date('fecha_menstruacion')->nullable();
            $table->text('signos_clinicos')->nullable();
            $table->text('especificacion_signo')->nullable();
            $table->text('localizacion')->nullable();
            $table->date('fecha_localizacion')->nullable();
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
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
        Schema::dropIfExists('datos_clinicos');
    }
}
