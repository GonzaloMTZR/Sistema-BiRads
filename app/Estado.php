<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function jurisdicciones(){
        return $this->hasMany('App\jurisdiccion', 'jurisdiccion_id');
    }
}
