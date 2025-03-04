@extends('master')

@section('title', 'Pokedex')

@section('header', 'Pokedex')

@section('content')
<div class="d-grid gap-3 ">
    <form class="d-grid gap-3" action="{{ route('pokemons.index') }}" method="GET">
        @csrf
        <input class="btn btn-primary btn-lg" type="submit" value="Pokemon">
    </form>
    <form class="d-grid gap-3" action="{{ route('objetos.index') }}" method="GET">
        <input class="btn btn-primary btn-lg" type="submit" value="Objetos">
    </form>
    <form class="d-grid gap-3" action="{{ route('tipos.index') }}" method="GET">
        <input class="btn btn-primary btn-lg" type="submit" value="Tipos">
    </form>
    <form class="d-grid gap-3" action="{{ route('generaciones.index') }}" method="GET">
        <input class="btn btn-primary btn-lg" type="submit" value="Generaciones">
    </form>
    <form class="d-grid gap-3" action="{{ route('habilidades.index') }}" method="GET">
        <input class="btn btn-primary btn-lg" type="submit" value="Habilidades">
    </form>
        
        <input class="btn btn-primary btn-lg" type="submit" value="Entrenadores">
</div>
@endsection