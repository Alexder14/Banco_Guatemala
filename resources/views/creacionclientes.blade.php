@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creación de Clientes') }}</div>

                <div class="card-body">
                    <!-- Formulario para la creación de clientes -->
                    <form action="{{ url('/manejador') }}" method="get">
                        <!-- Campo para ingresar los nombres -->
                        <div class="form-group">
                            <label for="Nombres">Nombres:</label>
                            <input type="text" id="Nombres" name="Nombres" class="form-control" required>
                        </div>

                        <!-- Campo para ingresar los apellidos -->
                        <div class="form-group">
                            <label for="Apellidos">Apellidos:</label>
                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" required>
                        </div>

                        <!-- Campo para ingresar la razón social -->
                        <div class="form-group">
                            <label for="RazonSocial">Razón Social:</label>
                            <input type="text" id="RazonSocial" name="RazonSocial" class="form-control" required>
                        </div>

                        <!-- Campo para ingresar la dirección -->
                        <div class="form-group">
                            <label for="Direccion">Dirección:</label>
                            <input type="text" id="Direccion" name="Direccion" class="form-control" required>
                        </div>

                        <!-- Campo para seleccionar el país -->
                        <div class="form-group">
                            <label for="Pais">País:</label>
                            <input type="text" id="Pais" name="Pais" class="form-control" required>
                        </div>

                        <!-- Campo para seleccionar el departamento -->
                        <div class="form-group">
                            <label for="Departamento">Departamento:</label>
                            <input type="text" id="Departamento" name="Departamento" class="form-control" required>
                        </div>

                        <!-- Campo para seleccionar el municipio -->
                        <div class="form-group">
                            <label for="Municipio">Municipio:</label>
                            <input type="text" id="Municipio" name="Municipio" class="form-control" required>
                        </div>

                        <!-- Campo para seleccionar el tipo de cuenta -->
                        <div class="form-group">
                            <label for="TipoCuenta">Tipo de Cuenta:</label>
                            <input type="text" id="TipoCuenta" name="TipoCuenta" class="form-control" required>
                        </div>

                        <!-- Campo para ingresar el número de documento -->
                        <div class="form-group">
                            <label for="Documento">Número de Documento:</label>
                            <input type="text" id="Documento" name="Documento" class="form-control" required>
                        </div>

                        <!-- Botones centrados para enviar el formulario y regresar a Home -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Crear Cliente</button>
                            <a href="{{ url('/home') }}" class="btn btn-secondary">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
