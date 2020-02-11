<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birad extends Model
{
    public function pacientes(){
        return $this->belongsTo('App\Paciente')
        ->withTimestamps();
    }
}
