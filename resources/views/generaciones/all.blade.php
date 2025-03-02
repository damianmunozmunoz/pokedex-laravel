@extends('master')

@section('title', 'Pokedex')

@section('header', 'Generaciones')

@section('content')

<table class="table table-striped table-secondary align-center">
    <tr>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Fecha Añadido</th>
        <th colspan="2">Opciones</th>
    </tr>
    @foreach ($listaGeneraciones as $generacion)
        <tr>
            <td>{{ $generacion->nombre }}</td>
            <td>{{ $generacion->cantidad }}</td>
            <td>{{ $generacion->fecha_añadido }}</td>
            <td><a class="btn btn-primary" href="{{ route('generaciones.edit', $generacion->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('generaciones.destroy', $generacion->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input class="btn btn-danger"  type="submit" value="Eliminar">
                </form>
            </td>
        </tr>
    @endforeach
</table><br>
<div class="d-flex justify-content-around h-auto">
    <div>
        {{ $listaGeneraciones->links() }} <!-- Paginación -->
    </div>
    <a class="btn btn-success" href="{{ route('generaciones.create') }}">Nueva Generación</a>
    <form action="{{ route('main') }}">
        <input class="btn btn-info" type="submit" value="MAIN">
    </form>
</div>
@endsection

