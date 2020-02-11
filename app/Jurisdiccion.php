<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurisdiccion extends Model
{
    protected $table = 'jurisdicciones';

    public function estados(){
        return $this->belongsTo('App\Estado', 'estado_id');
    }

    public function municipios(){
        return $this->hasMany('App\Municipio', 'jurisdiccion_id');
    }
}
