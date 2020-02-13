<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoDelEstudio extends Model
{
    public function estudios(){
        return $this->belongsToMany('App\Estudio')
        ->withTimestamps();
    }
}
