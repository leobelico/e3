<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Vehiculo;
class Importador implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Vehiculo([
            'nombre' => $row['nombre'],
            'tipo' => $row['tipo'],
            'capacidad' => $row['capacidad'],
            'color' => $row['color'],
            'precio' => $row['precio'],
            'estado' => $row['estado'],
        ]);
    }
}
