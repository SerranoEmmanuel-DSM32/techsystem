<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validar los datos del formulario de registro
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ap_pat' => 'required|string|max:255',
            'ap_mat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'edad' => 'required|integer',
            'genero' => 'required|in:M,F,O',
        ]);

        // Crear un nuevo usuario
        Usuario::create([
            'nombre' => $request->nombre, // Se puede establecer como null si no se proporciona
            'ap_pat' => $request->ap_pat,
            'ap_mat' => $request->ap_mat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'edad' => $request->edad,
            'genero' => $request->genero,
        ]);

        // Redireccionar al usuario después del registro
        return redirect('/login')->with('status', '¡Registro exitoso! Por favor, inicia sesión.');
    }
}
