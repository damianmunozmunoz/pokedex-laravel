@extends("master")

@section("title", "Pokedex")

@section("header", "Tipos")

@section("content")
<div class="container mt-4">
    <div class="card p-5">
        <h2 class="text-center mb-3">Formulario Tipos</h2>
        @isset($tipo)
            <form action="{{ route('tipos.update', ['tipo' => $tipo->id]) }}" method="POST">
            @method("PATCH")
        @else
            <form action="{{ route('tipos.store') }}" method="POST">
        @endisset
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $tipo->nombre ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Generación:</label>
                <select name="generacion_id" class="form-select">
                    @foreach($listaGeneraciones as $generacion)
                        <option value="{{ $generacion->id }}"
                            @if( $generacion->id == ($tipo->generacion_id ?? ""))
                                selected
                            @endif
                        >{{ $generacion->nombre }}</option>
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
