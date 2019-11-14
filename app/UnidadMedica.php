<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedica extends Model
{
    protected $table = 'unidades_medicas';

    public function localidades(){
        return $this->belongsTo('App\Localidad', 'localidad_id');
    }
}
