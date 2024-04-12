<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatosController extends Controller
{
    public function index()
    {
        $datos = DB::table('datos')->get(); // Obtener todos los datos de la tabla "datos"
        
        return view('datos.index', compact('datos'));
    }

    public function arduino()
    {
        return view('datos');
    }
}
