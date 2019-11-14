<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    public function jurisdicciones(){
        return $this->hasMany('App\Jurisdiccion', 'estado_id');
    }
}
