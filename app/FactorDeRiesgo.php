<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactorDeRiesgo extends Model
{
    protected $table = "factores_de_riesgos";

    public function pacientes(){
        return $this->belongsToMany('App\Pacientes')
        ->withTimestamps();
    }
}
