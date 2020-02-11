<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function jurisdicciones(){
        return $this->belongsTo('App\Jurisdiccion', 'jurisdiccion_id')->withTimestamps();
    }

    public function localidades(){
        return $this->hasMany('App\Localidad')->withTimestamps();
    }
}
