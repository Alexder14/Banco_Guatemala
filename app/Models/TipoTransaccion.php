<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTransaccion extends Model
{
    use HasFactory;

    protected $table = 'tipotransaccion'; // nombre de la tabla en minúsculas
    protected $primaryKey = 'id';
    public $timestamps = false; // Sin timestamps en esta tabla

    protected $fillable = [
        'descripcion' // asegúrate de que el nombre del campo coincide con el de la tabla
    ];

    // Relación con Transaccion (opcional si necesitas acceder a las transacciones desde el tipo)
    public function transacciones()
    {
        return $this->hasMany(Transacciones::class, 'idtipotransaccion');
    }
}