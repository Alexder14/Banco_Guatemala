@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Consulta de Saldo y Transacciones') }}</div>

                    <div class="card-body">
                        <!-- Formulario para solicitar el número de cuenta -->
                        <form action="{{ url('/consultaSaldo') }}" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="cuentaID">Número de Cuenta:</label>
                                <input type="text" id="cuentaID" name="cuentaID" class="form-control" required
                                    placeholder="Ingresa el número de cuenta">
                            </div>
                            <button type="submit" class="btn btn-primary">Consultar</button>
                        </form>

                        <!-- Sección para mostrar las transacciones -->
                        <div class="mt-4">
                            <h5>Transacciones:</h5>
                            <ul class="list-group">
                                <div class="mt-4">
                                    <h5>Transacciones:</h5>
                                    <ul class="list-group">
                                        @foreach ($data as $transaccion)
                                            <li class="list-group-item">
                                                {{ $transaccion['cuentaid'] }} - {{ $transaccion['tipomovimiento'] }} -
                                                {{ $transaccion['monto'] }} - {{ $transaccion['fechamovimiento'] }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
