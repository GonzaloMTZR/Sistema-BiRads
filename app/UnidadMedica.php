<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedica extends Model
{
    public function localidades(){
        return $this->belongsTo('App\Localidad', 'localidad_id');
    }
}
