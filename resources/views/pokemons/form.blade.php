@extends("master")

@section("title", "Pokedex")

@section("header", "Pokémon")

@section("content")
<div class="container mt-4">
    <div class="card p-5">
        <h2 class="text-center mb-3">Formulario Pokémon</h2>
        @isset($pokemon)
            <form action="{{ route('pokemons.update', ['pokemon' => $pokemon->id]) }}" method="POST">
            @method("PATCH")
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
                <select name="tipo_id" class="form-select">
                    @foreach($listaTipos as $tipo)
                        <option value="{{ $tipo->id }}"
                            @if( $tipo->id == ($pokemon->tipo_id ?? ""))
                                selected
                            @endif
                        >{{ $tipo->nombre }}</option>
                    @endforeach
                </select>            
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
                <select name="genero" class="form-select">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select> 
            </div>
            <div class="mb-3">
                <label class="form-label">Generación:</label>
                <select name="generacion_id" class="form-select">
                    @foreach($listaGeneraciones as $generacion)
                        <option value="{{ $generacion->id }}"
                            @if( $generacion->id == ($pokemon->generacion_id ?? ""))
                                selected
                            @endif
                        >{{ $generacion->nombre }}</option>
                    @endforeach
                </select> 
            </div>
            <div class="mb-3">
                <label class="form-label">Habilidad:</label>
                <select name="habilidad_id" class="form-select">
                    @foreach($listaHabilidades as $habilidad)
                        <option value="{{ $habilidad->id }}"
                            @if( $habilidad->id == ($pokemon->habilidad_id ?? ""))
                                selected
                            @endif
                        >{{ $habilidad->nombre }}</option>
                    @endforeach
                </select> 
            </div>
            <div class="mb-3">
                <label class="form-label">Objeto:</label>
                <select name="objeto_id" class="form-select">
                    @foreach($listaObjetos as $objeto)
                        <option value="{{ $objeto->id }}"
                            @if( $objeto->id == ($pokemon->objeto_id ?? ""))
                                selected
                            @endif
                        >{{ $objeto->nombre }}</option>
                    @endforeach
                </select> 
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
