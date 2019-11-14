<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Datos personales
            $table->text('nombre');
            $table->text('aPaterno');
            $table->text('aMaterno');
            $table->text('entidad');
            $table->text('curp');
            $table->date('fechaNacimiento');
            $table->text('edad');
            
            //Recidencia habitual
            $table->text('calle');
            $table->text('colonia');
            $table->text('municipio');
            $table->text('codigoPostal');
            $table->text('entidadFederativa');
            $table->text('jurisdiccion');
            $table->text('telefono');

            //Otro domicilio
            $table->text('calle_alter')->nullable();
            $table->text('colonia_alter')->nullable();
            $table->text('municipio_alter')->nullable();
            $table->text('telefono_alter')->nullable();

            //otros
            $table->text('correoElectronico')->nullable();
            $table->text('tiempoResidencia')->nullable();

            //Seguro
            $table->text('afiliacion')->nullable();
            $table->text('numeroAfiliacion')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
