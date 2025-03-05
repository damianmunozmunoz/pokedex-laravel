@extends('master')

@section('title', 'Pokedex')

@section('header', 'Tipos')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Lista de Tipos</h2>
        <form action="{{ route('tipos.buscar') }}" method="GET" class="input-group mb-3">
            @csrf
            <input type="text" name="dato" class="form-control" placeholder="Busca el tipo">
            
            <button type="submit" class="btn btn-dark">Buscar</button>
        </form>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaTipos as $tipo)
                    <tr>
                        <td>{{ $tipo->nombre }}</td>
                        <td>{{ $tipo->generacion->nombre }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('tipos.edit', $tipo->id) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('tipos.destroy', $tipo->id) }}" method="POST">
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
                {{ $listaTipos->links() }} <!-- Paginación -->
            </div>
            <a class="btn btn-success" href="{{ route('tipos.create') }}">Añadir Tipo</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    </div>
</div>

@endsection