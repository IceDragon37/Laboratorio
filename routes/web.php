<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prueba', 'NotificacionController@prueba')->name('prueba');
Route::get('/nueva', 'NotificacionController@nuevo')->name('nuevo');
Route::get('/lista', 'NotificacionController@lista')->name('lista');
Route::get('/sanciones', 'SancionController@sanciones')->name('sanciones');

Route::post('/nueva', 'NotificacionController@nuevaAlerta')->name('nuevaAlerta');
//rutas horarios
$nombre_ayudante='Juanin Juan Harry';

Route::view('/','welcome')->name('welcome');
//Route::view('/horario_lab','horario_lab',compact('nombre_ayudante'))->name('horariolab');
Route::get('/horario_labA','HorarioLabAController@index')->name('horariolabA');
Route::get('/horario_labB','HorarioLabBController@index')->name('horariolabB');
Route::get('/horario_labC','HorarioLabCController@index')->name('horariolabC');
Route::get('/horario_labUX','HorarioLabUXController@index')->name('horariolabUX');
Route::get('/horario_rack','HorarioRackController@index')->name('horariorack');
Route::view('/horario_ayudantes', 'horario_ayudantes', compact('nombre_ayudante'))->name('horarioayudantes');
Route::view('/horario_salas', 'horario_salas', compact('nombre_ayudante'))->name('horariosalas');
//rutas cajas
Route::get('/nuevacaja', 'sistemaCajaController@caja')->name('nuevaCaja');
Route::get('/verCaja', 'verCajacontroller@vercaja')->name('verCaja');
Route::get('/verImpresiones', 'verImpresionesController@verImpresiones')->name('verImpresiones');
Route::get('/agregarImpresion', 'agregarImpresionController@agregarImpresion')->name('agregarImpresion');
//Rutas Administracion
Route::get('/agregarAyudante','AyudanteController@AgregarAyudante')->name('AgregarAyudante');
Route::get('/listarAyudante','AyudanteController@ListarAyudante')->name('ListarAyudante');
Route::get('/agregarEquipo','LabOptimizacionController@AgregarEquipo')->name('AgregarEquipo');
Route::get('/asignarAlumno','LabOptimizacionController@AsignarAlumno')->name('AsignarAlumno');
Route::get('/listarEquipos','LabOptimizacionController@ListarEquipos')->name('ListarEquipos');
//Rutas llaves
Route::get('/index', function () {
    return view('Llaves/index');
})->name('index');

Route::get('/laboratorio', function () {
    return view('Llaves/laboratorio');
})->name('laboratorio');

Route::get('/formulario', function () {
    return view('Llaves/formulario');
})->name('formulario');

Route::get('/rack', function () {
    return view('Llaves/rack');
})->name('rack');

Route::get('/optimizacion', function () {
    return view('Llaves/optimizacion');
})->name('optimizacion');

//rutas documentos
Route::get('/manuales', "DocumentosController@manuales")->name('manuales');
Route::get('/tutoriales', "DocumentosController@tutoriales")->name('tutoriales');
Route::get('/claves', "DocumentosController@claves")->name('claves');