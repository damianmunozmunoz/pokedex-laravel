@extends("master")

@section("title", "Pokedex")

@section("header", "Habilidades")

@section("content")
<div class="container mt-4">
    <div class="card p-5">
        <h2 class="text-center mb-3">Formulario Habilidades</h2>
        @isset($habilidad)
            <form action="{{ route('habilidades.update', ['habilidad' => $habilidad->id]) }}" method="POST">
            @method("PUT")
        @else
            <form action="{{ route('habilidades.store') }}" method="POST">
        @endisset
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $habilidad->nombre ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion:</label>
                <input type="text" name="descripcion" class="form-control" value="{{ $habilidad->descripcion ?? ''}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de añadido:</label>
                <input type="date" name="fecha_añadido" class="form-control" value="{{ $habilidad->fecha_añadido->format('d/m/Y') ?? ''}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Rareza:</label>
                <select name="rareza" class="form-select">
                    <option value="Común">Común</option>
                    <option value="Poco común">Poco común</option>
                    <option value="Poco común">Rara</option>
                </select> 
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-primary" href="{{ route('habilidades.index') }}">Volver a la lista</a>
                <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
            </div>
        </form>
    </div>
</div>
@endsection
