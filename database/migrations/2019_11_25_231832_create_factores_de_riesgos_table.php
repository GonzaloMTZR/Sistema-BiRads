<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoresDeRiesgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factores_de_riesgos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('menarca');
            $table->text('familiaresAnt');
            $table->text('otroFamiliar')->nullable();
            $table->text('menopausia');
            $table->text('edadMenopausia')->nullable();
            $table->mediumText('otrosFactores')->nullable();
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
        Schema::dropIfExists('factores_de_riesgos');
    }
}
