<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ModificarUsuarioController extends Controller
{
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id); // Encuentra el usuario por su ID
        return view('usuarios.editar', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ap_pat' => 'required|string|max:255',
            'ap_mat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'edad' => 'required|integer',
            'genero' => 'required|in:M,F,O',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return redirect()->route('index')->with('success', '¡Usuario actualizado exitosamente!');
    }
}
