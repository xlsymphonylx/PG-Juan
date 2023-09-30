@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Nuevo Artículo de Inventario</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('inventory.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="code">Código</label>
                                <input type="text" class="form-control" id="code" name="code"
                                    placeholder="Ingrese el código" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="description">Descripción</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Ingrese la descripción" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="quantity">Cantidad</label>
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    placeholder="Ingrese la cantidad" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                            <a href="{{ route('inventory.index') }}" class="btn btn-danger mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection