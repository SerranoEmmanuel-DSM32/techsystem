<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DatosController;
use App\Http\Controllers\ModificarUsuarioController;
use App\Http\Controllers\EliminarUsuarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

Route::get('/venta', [VentaController::class, 'index'])->name('venta');

Route::get('/datos', [DatosController::class, 'index'])->name('datos');


Route::get('/usuarios/{id}/editar', [ModificarUsuarioController::class, 'edit'])->name('usuarios.editar');
Route::put('/usuarios/{id}', [ModificarUsuarioController::class, 'update'])->name('usuarios.update');

Route::get('/usuarios/{id}', [EliminarUsuarioController::class, 'destroy'])->name('usuarios.eliminar');

/*Route::get('/', function () {
    return view('welcome');
});*/
