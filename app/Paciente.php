<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function estudios(){
        return $this->belongsToMany('App\Estudio')
        ->withTimestamps();
    }

    public function factoresDeRiesgo(){
        return $this->belongsToMany('App\FactorDeRiesgo')
        ->withTimestamps();
    }

    public function birads(){
        return $this->hasMany('App\Birad', 'paciente_id');
    }

    public function datosClinicos(){
        return $this->hasMany('App\DatoClinico', 'paciente_id');
    }

    public function consultas(){
        return $this->hasMany('App\Consulta', 'paciente_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
