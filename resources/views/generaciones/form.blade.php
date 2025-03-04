@extends("master")

@section("title", "Pokedex")

@section("header", "Generaciones")

@section("content")
<div class="container mt-4">
    <div class="card p-5">
        <h2 class="text-center mb-3">Formulario Generaciones</h2>
        @isset($generacion)
            <form action="{{ route('generaciones.update', ['generacion' => $generacion->id]) }}" method="POST">
            @method("PUT")
        @else
            <form action="{{ route('generaciones.store') }}" method="POST">
        @endisset
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $generacion->nombre ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Cantidad de Pokémon:</label>
                <input type="text" name="cantidad" class="form-control" value="{{ $generacion->cantidad ?? ''}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de añadido:</label>
                <input type="date" name="fecha_añadido" class="form-control" value="{{ $generacion->fecha_añadido->format('d/m/Y') ?? ''}}">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-primary" href="{{ route('generaciones.index') }}">Volver a la lista</a>
                <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
            </div>
        </form>
    </div>
</div>
@endsection
