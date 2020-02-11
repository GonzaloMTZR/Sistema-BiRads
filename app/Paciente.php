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
        return $this->hasMany('App\Birad')
        ->withTimestamps();
    }
}
