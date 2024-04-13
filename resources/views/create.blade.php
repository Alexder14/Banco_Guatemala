{{-- resources/views/cuentas/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Cuenta</h1>
    <form action="{{ route('cuentas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="idCliente">Cliente</label>
            <select class="form-control" id="idCliente" name="idCliente" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="idTipoCuenta">Tipo de Cuenta</label>
            <select class="form-control" id="idTipoCuenta" name="idTipoCuenta" required>
                @foreach($tiposCuenta as $tipoCuenta)
                    <option value="{{ $tipoCuenta->id }}">{{ $tipoCuenta->descripcion }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="idTipoMoneda">Tipo de Moneda</label>
            <select class="form-control" id="idTipoMoneda" name="idTipoMoneda" required>
                @foreach($tiposMoneda as $tipoMoneda)
                    <option value="{{ $tipoMoneda->id }}">{{ $tipoMoneda->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="idUsers">Usuario</label>
            <select class="form-control" id="idUsers" name="idUsers" required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Saldo">Saldo</label>
            <input type="number" class="form-control" id="Saldo" name="Saldo" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="idEstadoCuenta">Estado de Cuenta</label>
            <select class="form-control" id="idEstadoCuenta" name="idEstadoCuenta" required>
                @foreach($estadosCuenta as $estadoCuenta)
                    <option value="{{ $estadoCuenta->id }}">{{ $estadoCuenta->descripcion }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection