<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of accounts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::all();
        return view('home');
    }

    /**
     * Show the form for creating a new account.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuenta.create');
    }

    /**
     * Store a newly created account in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idcliente' => ['required', 'integer'],
            'idtipocuenta' => ['required', 'integer'],
            'idtipomoneda' => ['required', 'integer'],
            'idusers' => ['required', 'integer'],
            'saldo' => 'required|numeric',
            'idestadocuenta' => ['required', 'integer'],
        ]);

        Cuenta::create($request->all());
        return redirect()->route('home')->with('success', 'Cuenta creada exitosamente.');
    }
}



