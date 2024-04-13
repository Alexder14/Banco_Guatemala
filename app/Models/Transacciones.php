<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    use HasFactory;

    protected $table = 'transacciones'; // nombre de la tabla en minúsculas
    protected $primaryKey = 'id';
    protected $fillable = [
        'idcuenta', 'idtipotransaccion', 'idusers', 'monto', 'fecha', 'hora'
    ];

    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class, 'idcuenta');
    }

    public function tipotransaccion()
    {
        return $this->belongsTo(TipoTransaccion::class, 'idtipotransaccion');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idusers');
    }
}