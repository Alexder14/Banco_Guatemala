<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Models\Transacciones;
use DB;

class TransaccionesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'idcuenta' => ['required', 'integer'],
            'monto' => 'required|numeric',
            'tipotransaccion' => ['required', 'integer'],
        ]);

        DB::beginTransaction();

        try {
            $cuenta = Cuenta::findOrFail($request->idCuenta);
            $nuevoSaldo = ($request->tipoTransaccion == 'deposito')
                ? $cuenta->Saldo + $request->monto
                : $cuenta->Saldo - $request->monto;

            if ($nuevoSaldo < 0) {
                throw new \Exception("Fondos insuficientes para esta transacción");
            }

            $cuenta->Saldo = $nuevoSaldo;
            $cuenta->save();

            // Registrar la transacción
            $transaccion = new Transacciones([
                'idcuenta' => $request->idCuenta,
                'idtipotransaccion' => $request->tipoTransaccion == 'deposito' ? 1 : 2, // Asumimos IDs para los tipos
                'idusers' => auth()->id(),
                'monto' => $request->monto,
            ]);
            $transaccion->save();

            DB::commit();
            return back()->with('success', 'Transacción realizada correctamente');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error en la transacción: ' . $e->getMessage());
        }
    }
}
