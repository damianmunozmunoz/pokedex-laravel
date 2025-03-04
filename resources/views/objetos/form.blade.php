@extends("master")

@section("title", "Pokedex")

@section("header", "Objetos")

@section("content")
<div class="container mt-4">
    <div class="card p-5">
        <h2 class="text-center mb-3">Formulario Objetos</h2>
        @isset($objeto)
            <form action="{{ route('objetos.update', ['objeto' => $objeto->id]) }}" method="POST">
            @method("PUT")
        @else
            <form action="{{ route('objetos.store') }}" method="POST">
        @endisset
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $objeto->nombre ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion:</label>
                <input type="text" name="descripcion" class="form-control" value="{{ $objeto->descripcion ?? ''}}">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-primary" href="{{ route('objetos.index') }}">Volver a la lista</a>
                <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
            </div>
        </form>
    </div>
</div>
@endsection
