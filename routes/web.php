<?php

use App\Http\Controllers\AdministradorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use GuzzleHttp\Middleware;

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
    return view('auth.login');
});

/*
Route::get('/empleados', function () {
    return view('empleados.index');
});
 es crea una ruta para usar un metodo en espesifico
Route::get('/empleados/crear', [EmpleadoController::class, 'create']);
*/
/* esto crea una ruta para usar todos los metodos de la clase empleado controller*/

Route::resource('empleados', EmpleadoController::class)->middleware('auth');

/*Route::resource('empleados', AdministradorController::class);*/

//ayuda a que desaparesca el registrar y olvidar contrasena
Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['Middleware' => 'auth'], function () {
    // Route::get('/', [EmpleadoController::class, 'index'])->name('home');
    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
});
