<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Generacion extends Model
{

    use SoftDeletes;

    protected $fillable = ['nombre', 'cantidad', 'fecha_añadido'];
    
    protected $casts = [
        'fecha_añadido' => 'date'
    ];
    
    public function pokemons(){
        return $this->hasMany(Pokemon::class);
    }

    public function tipos(){
        return $this->hasMany(Tipo::class);
    }
    protected $table='generacion';
}
