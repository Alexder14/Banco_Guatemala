@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creación de Cuenta') }}</div>

                <div class="card-body">
                    <form action="{{ route('creacioncuentas') }}" method="POST">
                        @csrf  {{-- Token de seguridad --}}

                        <div class="form-group">
                            <label for="idCliente">ID del Cliente:</label>
                            <input type="number" id="idCliente" name="idCliente" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="idTipoCuenta">ID Tipo de Cuenta:</label>
                            <input type="number" id="idTipoCuenta" name="idTipoCuenta" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="idTipoMoneda">ID Tipo de Moneda:</label>
                            <input type="number" id="idTipoMoneda" name="idTipoMoneda" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="idUsers">ID del Usuario:</label>
                            <input type="number" id="idUsers" name="idUsers" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Saldo">Saldo Inicial:</label>
                            <input type="text" id="Saldo" name="Saldo" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="idEstadoCuenta">ID Estado de Cuenta:</label>
                            <input type="number" id="idEstadoCuenta" name="idEstadoCuenta" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
