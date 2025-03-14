@extends('master')

@section('title', 'Pokedex')

@section('header', 'Objetos')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Lista de Objetos</h2>
        <form action="{{ route('objetos.buscar') }}" method="GET" class="input-group mb-3">
            @csrf
            <select name="criterio" class="form-select input-group-text">
                <option value="nombre">Nombre</option>
                <option value="descripcion">Descripcion</option>
            </select>
        
            <input type="text" name="dato" class="form-control" placeholder="Busca el objeto">
            
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
                @foreach ($listaObjetos as $objeto)
                    <tr>
                        <td>{{ $objeto->nombre }}</td>
                        <td>{{ $objeto->descripcion }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('objetos.edit', $objeto->id) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('objetos.destroy', $objeto->id) }}" method="POST">
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
                {{ $listaObjetos->links() }} <!-- Paginación -->
            </div>
            <a class="btn btn-success" href="{{ route('objetos.create') }}">Añadir Objeto</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    </div>
</div>

@endsection