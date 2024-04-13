<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCuenta extends Model
{
    protected $table = 'tipocuenta'; // Asegúrate de que coincida con el nombre de tu tabla en la base de datos
    public $timestamps = false;
    protected $fillable = ['descripcioncuenta'];

    // Aquí puedes agregar relaciones si 'TipoCuenta' está relacionada con otras tablas
}
