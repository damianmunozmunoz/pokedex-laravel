@extends('master')

@section('title', 'Pokedex')

@section('header', 'Tipo')

@section('content')

    @if(isset($tipos))
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Generación</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
                @forelse($tipos as $tipo)
                    <tr>
                        <td>{{ $tipo->nombre }}</td>
                        <td>{{ $tipo->generacion->nombre ?? ''}}</td>
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
                @empty
                    <tr>
                        <td colspan="3">No se encontraron resultados</td>    
                    </tr>
                @endforelse
        </table>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <a class="btn btn-success" href="{{ route('tipos.create') }}">Nuevo Tipo</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    @endif

@endsection