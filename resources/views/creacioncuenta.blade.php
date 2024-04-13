@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Creación de Cuentas') }}</div>

                    <div class="card-body">
                        <!-- Formulario para la creación de cuentas -->
                        <form action="{{ url('/manejadorCuenta') }}" method="get">
                            <!-- Selección del cliente -->
                            <div class="form-group">
                                <label for="clienteid">Cliente ID:</label>
                                <select name="clienteid" id="clienteid" class="form-control">
                                    @foreach ($data as $item)
                                        <option value="{{ $item['clienteid'] }}">{{ $item['clienteid'] }} {{ $item['nombres'] }}
                                            {{ $item['apellidos'] }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Campo para ingresar el saldo -->
                            <div class="form-group">
                                <label for="saldo">Saldo:</label>
                                <input type="text" id="saldo" name="saldo" class="form-control" required>
                            </div>

                            <!-- Campo para ingresar la moneda -->


                            <div class="form-group">
                                <label for="moneda">Moneda:</label>
                                <select name="moneda" id="moneda" class="form-control">
                                    <option value="320">Quetzal</option>
                                    <option value="798" selected>Dolar</option>
                                </select>
                            </div>


                            <!-- Selección del tipo de cuenta -->
                            <div class="form-group">
                                <label for="TipoCuentaid">Tipo de Cuenta:</label>
                                <select name="tipocuentaid" id="TipoCuentaid" class="form-control">
                                    <option value="1">Ahorro</option>
                                    <option value="2" selected>Monetaria</option>
                                </select>
                            </div>

                            <!-- Botones centrados para enviar el formulario y regresar a Home -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                                <a href="{{ url('/home') }}" class="btn btn-secondary">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
