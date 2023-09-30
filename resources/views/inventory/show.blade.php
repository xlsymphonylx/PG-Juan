@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles del Artículo de Inventario</div>

                    <div class="card-body">
                        <div class="form-group ">
                            <label for="code">Código</label>
                            <input type="text" class="form-control" id="code" name="code"
                                value="{{ $inventory->code }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="description">Descripción</label>
                            <input type="text" class="form-control" id="description" name="description"
                                value="{{ $inventory->description }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="quantity">Cantidad</label>
                            <input type="text" class="form-control" id="quantity" name="quantity"
                                value="{{ $inventory->quantity }}" readonly>
                        </div>

                        <a href="{{ route('inventory.edit', $inventory->id) }}" class="btn btn-primary mt-3">Editar</a>
                        <a href="{{ route('inventory.index') }}" class="btn btn-danger mt-3">Regresar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
