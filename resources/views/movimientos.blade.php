@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Transacción') }}</div>

                <div class="card-body">
                    <!-- Formulario para realizar transacciones -->
                    <form action="{{ url('/manejadorTransaccion') }}" method="get">
                        <!-- Selección de la cuenta ID -->
                        <div class="form-group">
                            <label for="cuentaid">Cuenta ID:</label>
                            <select name="cuentaid" id="cuentaid" class="form-control">
                                @foreach ($data as $item)
                                    <option value="{{ $item['cuentaid'] }}">{{ $item['cuentaid'] }} {{ $item['nombre'] }} - {{ $item['saldo'] }}</option>
                                @endforeach   
                            </select>
                        </div>

                        <!-- Selección del tipo de movimiento -->
                        <div class="form-group">
                            <label for="tipomovimiento">Tipo de Movimiento:</label>
                            <select id="tipomovimiento" name="tipomovimiento" class="form-control">
                                <option value="debito">Débito</option>
                                <option value="credito">Crédito</option>
                            </select>
                        </div>

                        <!-- Campo para ingresar el monto -->
                        <div class="form-group">
                            <label for="monto">Monto:</label>
                            <input type="text" id="monto" name="monto" class="form-control" required>
                        </div>

                        <!-- Campo oculto para ID de usuario que modifica -->
                        <div class="form-group">
                            <input type="hidden" value="1" id="idusuariomodifica" name="idusuariomodifica" class="form-control">
                        </div>

                        <!-- Botones centrados para realizar la operación y regresar -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Realizar Operación</button>
                            <a href="{{ url('/home') }}" class="btn btn-secondary">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




