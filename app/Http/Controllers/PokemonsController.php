<?php

namespace App\Http\Controllers;

use App\Models\Generacion;
use Illuminate\Http\Request;
use App\Models\Tipo;
use App\Models\Objeto;
use App\Models\Habilidad;
use App\Models\Pokemon;
class PokemonsController extends Controller
{
    public function index()
    {
        $listaPokemons = Pokemon::paginate(25);
        return view('pokemons.all', ['listaPokemons' => $listaPokemons]);
    }

    public function show(string $id){
        $pokemon = Pokemon::find($id);
        return view('pokemons.show', ['pokemon' => $pokemon]);
    }

    public function create()
    {
        $listaTipos = Tipo::all();
        $listaGeneraciones = Generacion::all();
        $listaObjetos = Objeto::all();
        $listaHabilidades = Habilidad::all();
        return view('pokemons.form', ['listaTipos' => $listaTipos, 'listaGeneraciones' => $listaGeneraciones, 'listaObjetos' => $listaObjetos, 'listaHabilidades' => $listaHabilidades]);
    }
    public function store(Request $r)
    {
        $p = new Pokemon();
        $p->nombre = $r->nombre;
        $p->peso = $r->peso;
        $p->altura = $r->altura;
        $p->genero = $r->genero;
        $p->tipo_id = $r->tipo_id;
        $p->generacion_id = $r->generacion_id;
        $p->objeto_id = $r->objeto_id;
        $p->habilidad_id = $r->habilidad_id;
        $p->save();
        return redirect()->route('pokemons.index');
    }
    public function edit($id){
        $pokemon = Pokemon::find($id);
        $listaTipos = Tipo::all();
        $listaGeneraciones = Generacion::all();
        $listaObjetos = Objeto::all();
        $listaHabilidades = Habilidad::all();
        return view('pokemons.form', ['pokemon' => $pokemon, 'listaTipos' => $listaTipos, 'listaGeneraciones' => $listaGeneraciones, 'listaObjetos' => $listaObjetos, 'listaHabilidades' => $listaHabilidades]);
    }
    public function update($id, Request $r){
        $p = Pokemon::find($id);
        $p->nombre = $r->nombre;
        $p->peso = $r->peso;
        $p->altura = $r->altura;
        $p->genero = $r->genero;
        $p->tipo_id = $r->tipo_id;
        $p->generacion_id = $r->generacion_id;
        $p->objeto_id = $r->objeto_id;
        $p->habilidad_id = $r->habilidad_id;
        $p->save();
        return redirect()->route('pokemons.index');
    }
    public function destroy($id){
        $p = Pokemon::find($id);
        $p->delete();
        return redirect()->route('pokemons.index');
    }
}
