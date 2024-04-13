<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoMoneda extends Model
{
    protected $table = 'tipomoneda'; // Asegúrate de que coincida con el nombre de tu tabla en la base de datos
    public $timestamps = false;
    protected $fillable = ['nombremoneda'];

    // Aquí puedes agregar relaciones si 'TipoMoneda' está relacionada con otras tablas
}
