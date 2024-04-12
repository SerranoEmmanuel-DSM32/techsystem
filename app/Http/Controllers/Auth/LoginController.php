<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Si la autenticación es exitosa, redireccionar al usuario a su panel de control o a la página deseada
            return redirect()->intended('/dashboard');
        }

        // Si la autenticación falla, redireccionar de vuelta al formulario de inicio de sesión con un mensaje de error
        return redirect('/login')->with('error', 'Credenciales no válidas. Por favor, inténtalo de nuevo.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
