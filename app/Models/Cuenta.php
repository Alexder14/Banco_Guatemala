<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuenta'; // Asegúrate de que el nombre de la tabla es correcto

    protected $fillable = [
        'idcliente', 'idtipocuenta', 'idtipomoneda', 'idusers', 'saldo', 'idestadocuenta'
    ];

    public $timestamps = false; // Esto desactiva la gestión automática de las marcas de tiempo

    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idcliente');
    }

    public function tipocuenta()
    {
        return $this->belongsTo(TipoCuenta::class, 'idtipocuenta');
    }

    public function tipomoneda()
    {
        return $this->belongsTo(TipoMoneda::class, 'idtipomoneda');
    }

    public function estadocuenta()
    {
        return $this->belongsTo(EstadoCuenta::class, 'idestadocuenta');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idusers');
    }

    public function transacciones()
    {
        return $this->hasMany(Transaccion::class, 'idcuenta');
    }
}






