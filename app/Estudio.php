<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    public function Pacientes(){
        return $this->belongsToMany('App\Paciente')
            ->withTimestamps();
    }

    public function resultados(){
        return $this->belongsToMany('App\ResultadoDelEstudio')
        ->withTimestamps();
    }
}
