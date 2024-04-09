@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CREACION DE CUENTAS DE AHORRO') }}</div>

                <div class="card-body">
                    
                    

                    <h4></h4>
                    <div class="form-group">
                        <label for="cliente">Cliente:</label>
                        <input type="text" id="cliente" name="cliente" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="monto">Monto inicial:</label>
                        <input type="number" id="monto" name="monto" class="form-control" required>
                    </div>

                    <button type="button" class="btn btn-primary">Crear cuenta</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
