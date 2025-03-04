@extends('master')

@section('title', 'Pokedex')

@section('header', 'Pokémon')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Lista de Pokémon</h2>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>Género</th>
                    <th>Generación</th>
                    <th>Habilidad</th>
                    <th>Objeto</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaPokemons as $pokemon)
                    <tr>
                        <td>{{ $pokemon->nombre }}</td>
                        <td>{{ $pokemon->tipo->nombre ?? ''}}</td>
                        <td>{{ $pokemon->peso }}</td>
                        <td>{{ $pokemon->altura }}</td>
                        <td>{{ $pokemon->genero }}</td>
                        <td>{{ $pokemon->generacion->nombre ?? '' }}</td>
                        <td>{{ $pokemon->habilidad->nombre ?? '' }}</td>
                        <td>{{ $pokemon->objeto->nombre ?? '' }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('pokemons.edit', $pokemon->id) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <div>
                {{ $listaPokemons->links() }} <!-- Paginación -->
            </div>
            <a class="btn btn-success" href="{{ route('pokemons.create') }}">Nuevo Pokémon</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    </div>
</div>

@endsection