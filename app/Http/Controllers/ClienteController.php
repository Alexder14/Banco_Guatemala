<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $response = Http::get('http://localhost/api/clientes');
        // $posts = $response->json();
        //return $request;

        $response = Http::post('http://localhost/api/clientes', [
            'nombres' => $request->cliente,
            'apellidos' => $request->Apellidos,
            'razon_social' => $request->Razon_Social,
            'direccion' => $request->Direccion,
            'documento' => $request->Documento,


        ]);
        return view('exitoso');
    }

    public function almacenarCuenta(Request $request)
    {
        // $response = Http::get('http://localhost/api/clientes');
        // $posts = $response->json();
        //return $request;

        $response = Http::post('http://localhost/api/cuenta', [
            'clienteid' => $request->clienteid,
            'saldo' => $request->saldo,
            'moneda' => $request->moneda,
            'tipocuentaid' => $request->tipocuentaid,

        ]);
        return view('exitoso');
    }

    public function realizarTransaccion(Request $request)
    {
        // $response = Http::get('http://localhost/api/clientes');
        // $posts = $response->json();
        //return $request;

        $response = Http::post('http://localhost/api/movimiento', [
            'cuentaid' => $request->cuentaid,
            'tipomovimiento' => $request->tipomovimiento,
            'monto' => $request->monto,
            'idusuariomodifica' => $request->idusuariomodifica,

        ]);
        return view('exitoso');
    }


    public function formulariomovimientos(Request $request)
    {
        $response = Http::get('http://localhost/api/cuenta');
        $clientes = $response->json();

        return view('movimientos')->with(['data' => $clientes]);
        //return view('movimientos',['data'=> $clientes]);
    }


    public function formulariocuenta(Request $request)
    {
        $response = Http::get('http://localhost/api/clientes');
        $clientes = $response->json();

        return view('creacioncuenta')->with(['data' => $clientes]);
        //return view('movimientos',['data'=> $clientes]);
    }


    public function consultaSaldo(Request $request)
    {

        return view('vistacuenta');
        //return view('movimientos',['data'=> $clientes]);
    }

    public function mostrarSaldo(Request $request)
    {
        $response = Http::get('http://localhost/api/movimiento?cuentaID='.$request->cuentaID);
        $clientes = $response->json();

        return view('vistacuenta')->with(['data' => $clientes]);
        //return view('movimientos',['data'=> $clientes]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
