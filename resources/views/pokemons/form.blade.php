@extends("master")

@section("title", "Pokedex")

@section("header", "Pokémon")

@section("content")
<div class="container mt-4">
    <div class="card p-5">
        <h2 class="text-center mb-3">Formulario Pokémon</h2>
        @isset($pokemon)
            <form action="{{ route('pokemons.update', ['pokemon' => $pokemon->id]) }}" method="POST">
            @method("PUT")
        @else
            <form action="{{ route('pokemons.store') }}" method="POST">
        @endisset
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $pokemon->nombre ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo:</label>
                <input type="text" name="tipo" class="form-control" value="{{ $pokemon->tipo->nombre ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Peso:</label>
                <input type="text" name="peso" class="form-control" value="{{ $pokemon->peso ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Altura:</label>
                <input type="text" name="altura" class="form-control" value="{{ $pokemon->altura ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Género:</label>
                <input type="text" name="genero" class="form-control" value="{{ $pokemon->genero ?? '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Generación:</label>
                <input type="text" name="generacion" class="form-control" value="{{ $pokemon->generacion->nombre ?? '' }}">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-primary" href="{{ route('pokemons.index') }}">Volver a la lista</a>
                <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
            </div>
        </form>
    </div>
</div>
@endsection
