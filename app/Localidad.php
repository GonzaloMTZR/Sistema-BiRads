<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';

    public function jurisdicciones(){
        return $this->belongsTo('App\Jurisdiccion', 'jurisdiccion_id');
    }

    public function unidadesMedicas(){
        return $this->hasMany('App\UnidadMedica', 'localidad_id');
    }
}
