@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Nuevo Piloto</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pilot.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nombre_de_piloto">Nombre de Piloto</label>
                                <input type="text" class="form-control" id="nombre_de_piloto" name="nombre_de_piloto"
                                    placeholder="Ingrese el nombre" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="licencia">Licencia</label>
                                <input type="text" class="form-control" id="licencia" name="licencia"
                                    placeholder="Ingrese la licencia" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="codigo_piloto">Código de Piloto</label>
                                <input type="text" class="form-control" id="codigo_piloto" name="codigo_piloto"
                                    placeholder="Ingrese el código" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="cabezal">Cabezal</label>
                                <input type="text" class="form-control" id="cabezal" name="cabezal"
                                    placeholder="Ingrese el cabezal" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="placa">Placa</label>
                                <input type="text" class="form-control" id="placa" name="placa"
                                    placeholder="Ingrese la placa" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                            <a href="{{ route('pilot.index') }}" class="btn btn-danger mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
