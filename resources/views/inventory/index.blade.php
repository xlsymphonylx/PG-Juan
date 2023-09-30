@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Inventario</div>

                    <div class="card-body">
                        <a href="{{ route('inventory.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Artículo</a>

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventories as $inventory)
                                    <tr>
                                        <td>{{ $inventory->code }}</td>
                                        <td>{{ $inventory->description }}</td>
                                        <td>{{ $inventory->quantity }}</td>
                                        <td>
                                            <a href="{{ route('inventory.show', $inventory->id) }}"
                                                class="btn btn-info">Ver</a>
                                            <a href="{{ route('inventory.edit', $inventory->id) }}"
                                                class="btn btn-primary">Editar</a>
                                            <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST"
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
