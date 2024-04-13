
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Realizar Transacción</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('transacciones.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="idcuenta">ID de Cuenta:</label>
            <input type="number" class="form-control" id="idcuenta" name="idcuenta" required>
        </div>
        <div class="form-group">
            <label for="monto">Monto:</label>
            <input type="number" class="form-control" id="monto" name="monto" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="tipotransaccion">Tipo de Transacción:</label>
            <select class="form-control" id="tipotransaccion" name="tipotransaccion">
                <option value="deposito">Depósito</option>
                <option value="retiro">Retiro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Realizar Transacción</button>
    </form>
</div>
@endsection