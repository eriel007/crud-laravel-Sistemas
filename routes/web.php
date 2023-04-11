<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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
    return view('welcome');
});
/*
Route::get('/empleados', function () {
    return view('empleados.index');
});
 es crea una ruta para usar un metodo en espesifico
Route::get('/empleados/crear', [EmpleadoController::class, 'create']);
*/
/* esto crea una ruta para usar todos los metodos de la clase empleado controller*/
Route::resource('empleados', EmpleadoController::class);
