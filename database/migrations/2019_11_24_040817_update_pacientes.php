<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->text('entreCalles')->after('calle')->nullable();
            $table->text('manzana')->after('colonia')->nullable();
            $table->text('lote')->after('manzana')->nullable();
            $table->longText('referenciaDom')->after('lote')->nullable();
            $table->text('localidad')->after('jurisdiccion')->nullable();


            $table->text('entreCalles_alter')->after('calle_alter')->nullable();
            $table->text('manzana_alter')->after('colonia_alter')->nullable();
            $table->text('lote_alter')->after('manzana_alter')->nullable();
            $table->longText('referenciaDom_alter')->after('lote_alter')->nullable();
            $table->text('entidad_alter')->after('referenciaDom_alter')->nullable();
            $table->text('jurisdiccion_alter')->after('entidad_alter')->nullable();
            $table->text('localidad_alter')->after('jurisdiccion_alter')->nullable();
            $table->text('otraAfiliacion')->after('numeroAfiliacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->dropColumn(['entreCalles', 'manzana', 'lote',
            'referenciaDom', 'localidad', 'entreCalles_alter', 'manzana_alter', 
            'lote_alter', 'referenciaDom_alter', 'entidad_alter', 'jurisdiccion_alter',
            'localidad_alter', 'otraAfiliacion']);
        });
    }
}
