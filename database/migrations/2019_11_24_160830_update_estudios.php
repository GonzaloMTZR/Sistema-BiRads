<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEstudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estudios', function (Blueprint $table) {
            $table->dropColumn(['institucion', 'entidad', 'jurisdiccion', 'municipio',
            'localidad', 'unidadMedica', 'clues', 'birads', 'resultados', 'archivo']);

            
            $table->text('tipoEstudio')->after('fechaDeToma');
            $table->text('otroEstudio')->after('tipoEstudio')->nullable();
            
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
