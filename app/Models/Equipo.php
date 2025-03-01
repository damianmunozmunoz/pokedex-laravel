<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use SoftDeletes;
    
    public function pokemon(){
        return $this->hasMany('App\Models\Pokemon');
    }

    public function user(){
        return $this->hasOne('App\Models\User');
    }
}
