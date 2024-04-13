@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Nueva Cuenta</h2>

    <form action="{{ route('cuenta.store') }}" method="POST"> 
        @csrf
        <div class="form-group">
            <label for="idcliente">Cliente:</label>
            <input type="number" id="idcliente" name="idcliente" required class="form-control">
        </div>
        <div class="form-group">
            <label for="idtipocuenta">Tipo de Cuenta:</label>
            <input type="number" id="idtipocuenta" name="idtipocuenta" required class="form-control">
        </div>
        <div class="form-group">
            <label for="idtipomoneda">Tipo de Moneda:</label>
            <input type="number" id="idtipomoneda" name="idtipomoneda" required class="form-control">
        </div>
        <div class="form-group">
            <label for="idusers">Usuario:</label>
            <input type="number" id="idusers" name="idusers" required class="form-control">
        </div>
        <div class="form-group">
            <label for="saldo">Saldo:</label>
            <input type="text" id="saldo" name="saldo" required class="form-control">
        </div>
        <div class="form-group">
            <label for="idestadocuenta">Estado de Cuenta:</label>
            <input type="number" id="idestadocuenta" name="idestadocuenta" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Crear Cuenta</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Regresar</a>
    </form>
</div>
@endsection
