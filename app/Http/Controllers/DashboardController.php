<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Aquí puedes agregar la lógica para obtener los datos que quieres mostrar en el dashboard
        return view('index');
    }
}
