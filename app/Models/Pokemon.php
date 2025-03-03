<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pokemon extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo', 'id_tipo');
    }

    public function generacion(){
        return $this->belongsTo('App\Models\Generacion', 'id_generacion');
    }

    public function objeto(){
        return $this->belongsTo('App\Models\Objeto', 'id_objeto');
    }
    protected $table = 'pokemons';
}
