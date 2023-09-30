@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles del Piloto</div>

                    <div class="card-body">
                        <div class="form-group ">
                            <label for="nombre_de_piloto">Nombre de Piloto</label>
                            <input type="text" class="form-control" id="nombre_de_piloto" name="nombre_de_piloto"
                                value="{{ $pilot->nombre_de_piloto }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="licencia">Licencia</label>
                            <input type="text" class="form-control" id="licencia" name="licencia"
                                value="{{ $pilot->licencia }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="codigo_piloto">Código de Piloto</label>
                            <input type="text" class="form-control" id="codigo_piloto" name="codigo_piloto"
                                value="{{ $pilot->codigo_piloto }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="cabezal">Cabezal</label>
                            <input type="text" class="form-control" id="cabezal" name="cabezal"
                                value="{{ $pilot->cabezal }}" readonly>
                        </div>

                        <div class="form-group mt-3">
                            <label for="placa">Placa</label>
                            <input type="text" class="form-control" id="placa" name="placa"
                                value="{{ $pilot->placa }}" readonly>
                        </div>

                        <a href="{{ route('pilot.edit', $pilot->id) }}" class="btn btn-primary mt-3">Editar</a>
                        <a href="{{ route('pilot.index') }}" class="btn btn-danger mt-3">Regresar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
