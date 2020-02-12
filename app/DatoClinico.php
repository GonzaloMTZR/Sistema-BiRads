<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoClinico extends Model
{
    protected $table = 'datos_clinicos';

    public function pacientes(){
        return $this->belongsTo('App\Paciente', 'paciente_id');
    }
}
