<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public function pacientes(){
        return $this->belongsTo('App\Paciente', 'paciente_id');
    }
}
