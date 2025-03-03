<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objeto extends Model
{

    use SoftDeletes;

    protected $fillable = ['nombre', 'descripcion'];
    
    public function pokemon(){
        return $this->hasMany(Pokemon::class);
    }
}
