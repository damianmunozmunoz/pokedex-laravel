@extends('master')

@section('title', 'Pokedex')

@section('header', 'Pokedex')

@section('content')
<div class="d-grid gap-3 ">
    <form class="d-grid gap-3" action="{{ route('pokemons.index') }}" method="GET">
        <input class="btn btn-primary btn-lg text-center" type="submit" value="Pokemon">
    </form>
    <form class="d-grid gap-3" action="{{ route('objetos.index') }}" method="GET">
        <input class="btn btn-primary btn-lg" type="submit" value="Objetos">
    </form>
    
        <input class="btn btn-primary btn-lg" type="submit" value="Tipos">
        <input class="btn btn-primary btn-lg" type="submit" value="Generaciones">
        <input class="btn btn-primary btn-lg" type="submit" value="Entrenadores">
        <input class="btn btn-primary btn-lg" type="submit" value="Equipos">
</div>
@endsection