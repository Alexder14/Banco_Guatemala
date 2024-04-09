@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MENU PRINCIPAL') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido') }}

                    <ul>
                        <li><a href="#">Creación de cuentas de ahorros</a></li>
                        <li><a href="#">Transacciones (Retiros o Depósitos)</a></li>
                        <li><a href="#">Consulta de saldo de cuenta</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
