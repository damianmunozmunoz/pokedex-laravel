<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habilidad;

class HabilidadesController extends Controller
{
    public function index(){
        $listaHabilidades = Habilidad::paginate(10);
        return view('habilidades.all', ['listaHabilidades' => $listaHabilidades]);
    }

    public function create(){
        return view('habilidades.form');
    }

    public function store(Request $r){
        $h = new Habilidad();
        $h->nombre = $r->nombre;
        $h->descripcion = $r->descripcion;
        $h->fecha_añadido = $r->fecha_añadido;
        $h->rareza = $r->rareza;
        $h->save();
        return redirect()->route('habilidades.index');
    }

    public function edit($id){
        $habilidad = Habilidad::find($id);
        return view('habilidades.form', ['habilidad' => $habilidad]);
    }

    public function update($id, Request $r){
        $h = Habilidad::find($id);
        $h->nombre = $r->nombre;
        $h->descripcion = $r->descripcion;
        $h->fecha_añadido = $r->fecha_añadido;
        $h->rareza = $r->rareza;
        $h->save();
        return redirect()->route('habilidades.index');
    }

    public function destroy($id){
        $h = Habilidad::find($id);
        $h->delete();
        return redirect()->route('habilidades.index');
    }
}
