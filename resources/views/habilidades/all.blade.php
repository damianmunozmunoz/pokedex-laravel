@extends('master')

@section('title', 'Pokedex')

@section('header', 'Habilidades')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Lista de Habilidades</h2>
        <form action="{{ route('habilidades.buscar') }}" method="GET" class="input-group mb-3">
            @csrf
            <select name="criterio" class="form-select input-group-text">
                <option value="nombre">Nombre</option>
                <option value="descripcion">Descripción</option>
                <option value="fecha_añadido">Fecha de añadido</option>
                <option value="rareza">Rareza</option>
            </select>
        
            <input type="text" name="dato" class="form-control" placeholder="Busca la habilidad">
            
            <button type="submit" class="btn btn-dark">Buscar</button>
        </form>
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha de añadido</th>
                    <th>Rareza</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaHabilidades as $habilidad)
                    <tr>
                        <td>{{ $habilidad->nombre }}</td>
                        <td>{{ $habilidad->descripcion}}</td>
                        <td>{{ $habilidad->fecha_añadido->format('d/m/Y') }}</td>
                        <td>{{ $habilidad->rareza }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('habilidades.edit', $habilidad->id) }}">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('habilidades.destroy', $habilidad->id) }}" method="POST">
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
                {{ $listaHabilidades->links() }} <!-- Paginación -->
            </div>
            <a class="btn btn-success" href="{{ route('habilidades.create') }}">Añadir Habilidad</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    </div>
</div>

@endsection