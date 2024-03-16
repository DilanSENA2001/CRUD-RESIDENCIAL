<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidenteController;
use App\Http\Controllers\ViviendaController;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TipoViviendaController;
use App\Http\Controllers\ZonaComunController;


use App\Models\Usuario;
use App\Models\Vivienda;
use App\Models\Zona_comun;

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

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', function () {
    return view('login');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [LoginController::class, 'register']);


Route::get('/residente', function () {
    return view('residente.index');
});

//Rutas residentes
Route::resource('/residente', ResidenteController::class);

Route::get('/residente/new', function () {
    return view('residentes.new');
});

Route::get('/residente/new', function () {
    return view('residentes.edit');
});
//Residentes

Route::get('/formulario', function () {
    return view('formulario.formu');
});

//rutas bloques
Route::get('/bloque', function () {
    return view('bloque.index');
});

Route::get('/bloque', function () {
    return view('bloques.new');
});

Route::get('/bloque', function () {
    return view('bloques.edit');
});
//bloques rutass


//viviendas rutas
Route::get('/vivienda', function () {
    return view('vivienda.index');
});

Route::get('/vivienda', function () {
    return view('viviendas.new');
});

Route::get('/vivienda', function () {
    return view('viviendas.edit');
});
////////////////////////////////////////////////////////////

//Eventos rutas
Route::get('/evento', function () {
    return view('evento.index');
});

Route::get('/evento/new', function () {
    return view('eventos.new');
});

Route::get('/evento/new', function () {
    return view('eventos.edit');
});

Route::resource('/evento', EventoController::class);

//Eventos



//permisos rutas
Route::get('/permiso', function () {
    return view('permiso.index');
});

Route::get('/permiso', function () {
    return view('permisos.new');
});

Route::get('/permiso', function () {
    return view('permisos.edit');
});
////////////////////////////////////////////////////////////////

//paquetes rutass
Route::get('/paquete', function () {
    return view('paquete.index');
});

Route::get('/paquete', function () {
    return view('paquetes.new');
});

Route::get('/paquete', function () {
    return view('paquetes.edit');
});

/////////////////////////////////////////////paquetes

//rutas usaurios
Route::get('/usuario', function () {
    return view('usuarios.index');
});

Route::get('/usuario', function () {
    return view('usuarios.new');
});
///////////////////////////////////////////////////////
Route::get('/tipo_vivienda', function () {
    return view('tipos_vivienda.index');
});

Route::get('/tipo_vivienda', function () {
    return view('tipos_viviendas.new');
});

Route::get('/tipo_vivienda', function () {
    return view('tipos_viviendas.edit');
});
///////////////////////////////////////////////////////


//rutas reservas
Route::get('/reserva', function () {
    return view('reserva.index');
});

Route::get('/reserva', function () {
    return view('reservas.new');
});

Route::get('/reserva', function () {
    return view('reservas.edit');
});
//////////////////////////////////////////////////////

//ZONA COOMUN RUTAS
Route::get('/zona_comun', function () {
    return view('zona_comun.index');
});

Route::get('/zona_comun', function () {
    return view('zonas_comunes.create');
});

Route::get('/zona_comun', function () {
    return view('zonas_comunes.edit');
});
/*
vista del controlador de la vista
*/


Route::resource('residente', ResidenteController::class);

Route::resource('vivienda', ViviendaController::class);

Route::resource('bloque', BloqueController::class);

Route::resource('evento', EventoController::class);

Route::resource('permiso', PermisoController::class);

Route::resource('paquete', PaqueteController::class);


Route::resource('tipo_vivienda', TipoViviendaController::class);

Route::resource('reserva', ReservaController::class);

Route::resource('zona_comun', ZonaComunController::class);
