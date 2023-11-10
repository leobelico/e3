<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo'; // Nombre correcto de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'tipo',
        'capacidad',
        'color',
        'modelo3d',
        'usuario_id', 
        'precio',
        'estado',
    ];
}
