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

Route::get('/manuales', "DocumentosController@manuales")->name('manuales');
