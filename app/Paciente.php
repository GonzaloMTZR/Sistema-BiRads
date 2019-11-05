<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function Estudios(){
        return $this->belongsToMany('App\Estudio')
        ->withTimestamps();
    }
}
