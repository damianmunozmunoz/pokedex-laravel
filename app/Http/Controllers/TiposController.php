<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Models\Generacion;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function index()
    {
        $listaTipos = Tipo::paginate(10);
        return view('tipos.all', ['listaTipos' => $listaTipos]);
    }
    
    public function show(string $id) {
        $tipo = Tipo::find($id);
        return view('tipos.show', ['tipo' => $tipo]);
    }
    
    public function create()
    {
        $listaGeneraciones = Generacion::all();
        return view('tipos.form', ['listaGeneraciones' => $listaGeneraciones]);
    }
    public function store(Request $r)
    {
        $p = new Tipo();
        $p->nombre = $r->nombre;
        $p->id_generacion = $r->id_generacion;
        $p->save();
        return redirect()->route('tipos.index');
    }
    public function edit($id){
        $tipo = Tipo::find($id);
        $listaGeneraciones = Generacion::all();
        return view('tipos.form', ['tipo' => $tipo, 'listaGeneraciones' => $listaGeneraciones]);
    }
    public function update(string $id, Request $r){
        $p = Tipo::find($id);
        $p->nombre = $r->nombre;
        $p->id_generacion = $r->id_generacion;
        $p->save();
        return redirect()->route('tipos.index');
    }
    public function destroy(string $id){
        $p = Tipo::find($id);
        $p->delete();
        return redirect()->route('tipos.index');
    }

}
