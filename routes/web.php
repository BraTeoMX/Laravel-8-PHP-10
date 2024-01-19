<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FormularioDatosController;

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

Route::get('/', function () {
    return redirect('/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    // Todas las rutas aquí requieren autenticación.
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/perfil', [PerfilController::class, 'mostrarPerfil'])->name('perfil');
    // Ruta para mostrar el formulario
    Route::get('/formulario-datos', [FormularioDatosController::class, 'create'])->name('formulario.datos');
    // Ruta para procesar los datos del formulario
    Route::post('/formulario-datos', [FormularioDatosController::class, 'store']);

});
