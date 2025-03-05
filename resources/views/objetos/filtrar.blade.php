@extends('master')

@section('title', 'Pokedex')

@section('header', 'Objeto')

@section('content')

    @if(isset($objetos))
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
                @forelse($objetos as $objeto)
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
                @empty
                    <tr>
                        <td colspan="3">No se encontraron resultados</td>    
                    </tr>
                @endforelse
        </table>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <a class="btn btn-success" href="{{ route('objetos.create') }}">Nuevo Objeto</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    @endif

@endsection