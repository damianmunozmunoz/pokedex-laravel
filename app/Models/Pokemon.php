<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pokemon extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre', 'peso', 'altura', 'genero', 'tipo_id', 'generacion_id', 'objeto_id', 'habilidad_id'];

    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }

    public function generacion(){
        return $this->belongsTo(Generacion::class);
    }

    public function objeto(){
        return $this->belongsTo(Objeto::class);
    }

    public function habilidad(){
        return $this->belongsTo(Habilidad::class);
    }
    protected $table = 'pokemons';
}
