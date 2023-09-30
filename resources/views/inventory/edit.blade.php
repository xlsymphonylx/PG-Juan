@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Información del Artículo de Inventario</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('inventory.update', $inventory->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="code">Código</label>
                                <input type="text" class="form-control" id="code" name="code"
                                    value="{{ $inventory->code }}" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="description">Descripción</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ $inventory->description }}" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="quantity">Cantidad</label>
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    value="{{ $inventory->quantity }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
                            <a href="{{ route('inventory.index') }}" class="btn btn-danger mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection