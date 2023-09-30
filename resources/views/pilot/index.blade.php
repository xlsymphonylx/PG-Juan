@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pilotos</div>
                    <div class="card-body">
                        <a href="{{ route('pilot.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Piloto</a>

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre de Piloto</th>
                                    <th>Licencia</th>
                                    <th>Código de Piloto</th>
                                    <th>Cabezal</th>
                                    <th>Placa</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pilots as $pilot)
                                    <tr>
                                        <td>{{ $pilot->nombre_de_piloto }}</td>
                                        <td>{{ $pilot->licencia }}</td>
                                        <td>{{ $pilot->codigo_piloto }}</td>
                                        <td>{{ $pilot->cabezal }}</td>
                                        <td>{{ $pilot->placa }}</td>
                                        <td>
                                            <a href="{{ route('pilot.show', $pilot->id) }}" class="btn btn-info">Ver</a>
                                            <a href="{{ route('pilot.edit', $pilot->id) }}"
                                                class="btn btn-primary">Editar</a>
                                            <form action="{{ route('pilot.destroy', $pilot->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

