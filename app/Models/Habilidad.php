<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habilidad extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nombre', 'descripcion', 'fecha_añadido', 'rareza'];

    protected $casts = [
        'fecha_añadido' => 'date'
    ];

    public function pokemons(){
        return $this->hasMany(Pokemon::class);
    }

    protected $table = 'habilidades';
}
