<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCuenta extends Model
{
    protected $table = 'estadocuenta'; // Asegúrate de que coincida con el nombre de tu tabla en la base de datos
    public $timestamps = false;
    protected $fillable = ['descripcionestado'];

    // Aquí puedes agregar relaciones si 'EstadoCuenta' está relacionada con otras tablas
}
