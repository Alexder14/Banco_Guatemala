<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cuentas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Cuentas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Cliente</th>
                    <th>Tipo de Cuenta</th>
                    <th>Tipo de Moneda</th>
                    <th>ID Usuario</th>
                    <th>Saldo</th>
                    <th>Estado de la Cuenta</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cuentas as $cuenta)
                    <tr>
                        <td>{{ $cuenta->id }}</td>
                        <td>{{ $cuenta->idCliente }}</td>
                        <td>{{ $cuenta->tipoCuenta->DescripcionCuenta ?? 'N/D' }}</td>
                        <td>{{ $cuenta->tipoMoneda->NombreMoneda ?? 'N/D' }}</td>
                        <td>{{ $cuenta->idUsers }}</td>
                        <td>{{ number_format($cuenta->Saldo, 2) }}</td>
                        <td>{{ $cuenta->estadoCuenta->DescripcionEstado ?? 'N/D' }}</td>
                        <td>{{ $cuenta->FechaCreacion->format('Y-m-d H:i:s') }}</td>
                        <td>
                            <a href="{{ route('cuenta.show', $cuenta->id) }}" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
