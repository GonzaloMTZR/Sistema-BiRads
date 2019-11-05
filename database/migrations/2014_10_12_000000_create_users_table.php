<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('sistema'); //Nombre del sistema de salud
            $table->string('tipoPerfil'); //Tipo de usuario
            $table->string('institucion'); //Nombre de la institucion a la que pertenece el doctor
            $table->string('entidad'); //Estado
            $table->string('jurisdiccion');
            $table->string('municipio');
            $table->string('localidad');
            $table->string('unidad_medica');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
