@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Operación Realizada') }}</div>

                <div class="card-body text-center">
                    <!-- Logo de la empresa -->
                    <img src="{{ asset('images/logoBanco.jpg') }}" alt="Logo del Banco de Guatemala" class="logo"> <!-- Asegúrate de ajustar la ruta al logo -->

                    <h4>Operación realizada con éxito</h4>
                    <!-- Contador de redirección -->
                    <p>Redireccionando en <span id="countdown">10</span> segundos...</p>
                    
                    <!-- Redirección automática con contador -->
                    <script type="text/javascript">
                        var timeLeft = 10; // Tiempo inicial en segundos
                        var timerId = setInterval(countdown, 1000);

                        function countdown() {
                            if (timeLeft == 0) {
                                clearTimeout(timerId);
                                window.location.href = "{{ url('/home') }}"; // Redirige a Home
                            } else {
                                timeLeft--;
                                document.getElementById('countdown').textContent = timeLeft;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
