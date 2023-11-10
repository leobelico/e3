<?php

namespace App\Http\Controllers;
use App\Exports\VehiculosExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class VehiculoExportController extends Controller
{
    public function exportar()
    {
        return Excel::download(new VehiculosExport, 'vehiculos.xlsx');
    }
}
