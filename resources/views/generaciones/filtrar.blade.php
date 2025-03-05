@extends('master')

@section('title', 'Pokedex')

@section('header', 'Generación')

@section('content')

    @if(isset($generaciones))
        <table class="table table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Fecha de añadido</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
                @forelse($generaciones as $generacion)
                    <tr>
                        <td>{{ $generacion->nombre }}</td>
                        <td>{{ $generacion->cantidad }}</td>
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
                @empty
                    <tr>
                        <td colspan="4">No se encontraron resultados</td>    
                    </tr>
                @endforelse
        </table>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <a class="btn btn-success" href="{{ route('generaciones.create') }}">Nueva Generación</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    @endif

@endsection