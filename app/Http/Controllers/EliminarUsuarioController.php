<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class EliminarUsuarioController extends Controller
{
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('home')->with('success', '¡Usuario eliminado exitosamente!');
    }
}
