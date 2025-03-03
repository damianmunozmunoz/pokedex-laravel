<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    
    use SoftDeletes;

    protected $fillable = ['nombre', 'generacion_id'];

    public function pokemon(){
        return $this->hasMany(Pokemon::class);
    }

    public function generacion(){
        return $this->belongsTo(Generacion::class);
    }
}
