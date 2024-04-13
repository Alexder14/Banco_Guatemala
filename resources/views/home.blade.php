@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-white">
                    <img src="{{ asset('images/logoBanco.jpg') }}" alt="Logo del Banco de Guatemala" class="logo mb-3" style="width: 150px;">
                    <h3>{{ __('MENU PRINCIPAL') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center mb-2">{{ __('Bienvenido al sistema del Banco de Guatemala') }}</h1>
                    <h3 class="text-center mb-2">{{ Auth::user()->nombres }} {{ Auth::user()->apellidos }}</h3>

                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/creacioncuenta" class="text-decoration-none">Creación de Cuentas de ahorro</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/creacionclientes" class="text-decoration-none">Creación de clientes</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/movimientos" class="text-decoration-none">Transacciones (Retiros o Depósitos)</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/vistacuenta" class="text-decoration-none">Consulta de saldo de cuenta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

