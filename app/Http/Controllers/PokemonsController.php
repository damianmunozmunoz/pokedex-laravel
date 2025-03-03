<?php

namespace App\Http\Controllers;

use App\Models\Generacion;
use Illuminate\Http\Request;
use App\Models\Tipo;
use App\Models\Pokemon;
class PokemonsController extends Controller
{
    public function index()
    {
        $listaPokemons = Pokemon::with(['tipo','generacion','objeto'])->paginate(25);
        return view('pokemons/all', ['listaPokemons' => $listaPokemons]);
    }
    public function create()
    {
        $tipo=Tipo::all();
        $generacion=Generacion::all();
        return view('pokemons/form', ['tipo' => $tipo], ['generacion' => $generacion]);
    }
    public function store(Request $r)
    {
        $p = new Pokemon();
        $p->nombre = $r->nombre;
        $p->peso = $r->peso;
        $p->altura = $r->altura;
        $p->genero = $r->genero;
        $p->tipo = $r->tipo;
        $p->id_generacion = $r->id_generacion;
        $p->id_objeto = $r->id_objeto;
        $p->save();
        return redirect()->route('pokemons.index');
    }
    public function edit($id){
        $pokemon = Pokemon::find($id);
        return view('pokemons/form', ['pokemon' => $pokemon]);
    }
    public function update($id, Request $r){
        $p = Pokemon::find($id);
        $p->nombre = $r->nombre;
        $p->peso = $r->peso;
        $p->altura = $r->altura;
        $p->genero = $r->genero;
        $p->id_tipo = $r->id_tipo;
        $p->id_generacion = $r->id_generacion;
        $p->id_objeto = $r->id_objeto;
        $p->save();
        return redirect()->route('pokemons.index');
    }
    public function destroy($id){
        $p = Pokemon::find($id);
        $p->delete();
        return redirect()->route('pokemons.index');
    }
}
