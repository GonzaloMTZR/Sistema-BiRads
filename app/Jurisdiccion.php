<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurisdiccion extends Model
{
    protected $table = 'jurisdicciones';

    public function estados(){
        return $this->belongsTo('App\Estado', 'jurisdiccion_id');
    }

    public function localidades(){
        return $this->hasMany('App\Localidad', 'jurisdiccion_id');
    }
}
