@extends('master')

@section('title', 'Pokedex')

@section('header', 'Habilidad')

@section('content')

    @if(isset($habilidades))
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
                @forelse($habilidades as $habilidad)
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
                @empty
                    <tr>
                        <td colspan="5">No se encontraron resultados</td>    
                    </tr>
                @endforelse
        </table>
        <div class="d-flex justify-content-between align-items-center mt-4">
            <a class="btn btn-success" href="{{ route('habilidades.create') }}">Nueva Habilidad</a>
            <a class="btn btn-info" href="{{ route('main') }}">MENÚ</a>
        </div>
    @endif

@endsection