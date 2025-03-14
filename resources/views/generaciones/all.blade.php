@extends('master')

@section('title', 'Pokedex')

@section('header', 'Generaciones')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Lista de generaciones</h2>
        <form action="{{ route('generaciones.buscar') }}" method="GET" class="input-group mb-3">
            @csrf
            <select name="criterio" class="form-select input-group-text">
                <option value="nombre">Nombre</option>
                <option value="cantidad">Cantidad</option>
                <option value="fecha_añadido">Fecha de añadido</option>
            </select>
        
            <input type="text" name="dato" class="form-control" placeholder="Busca la generación">
            
            <button type="submit" class="btn btn-dark">Buscar</button>
        </form>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Fecha de añadido</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaGeneraciones as $generacion)
                    <tr>
                        <td>{{ $generacion->nombre }}</td>
                        <td>{{ $generacion->cantidad}}</td>
                        <td>{{ $generacion->fecha_añadido->format('d/m/Y') }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('generaciones.edit', $generacion->id) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('generaciones.destroy', $generacion->id) }}" method="POST">
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
                {{ $listaGeneraciones->links() }} <!-- Paginación -->
            </div>
            <a class="btn btn-success" href="{{ route('generaciones.create') }}">Añadir Generación</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    </div>
</div>

@endsection