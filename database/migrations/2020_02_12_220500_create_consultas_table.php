<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('exploracion_clinica');
            $table->text('estudio');
            $table->text('otro_estudio')->nullable();
            $table->text('caso_probable');
            $table->longText('seguimiento_caso')->nullable();
            $table->text('seguimiento_semestral');
            $table->text('cedula_defuncion')->nullable();
            $table->date('fecha_consulta');
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
        Schema::dropIfExists('consultas');
    }
}
