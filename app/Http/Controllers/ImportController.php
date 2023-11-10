<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Importador;
class ImportController extends Controller
{
    public function importar(Request $request)
    {
        $file = $request->file('archivo');

        Excel::import(new Importador, $file);

        return redirect()->back()->with('mensaje', 'Importación completada');
    }
}
