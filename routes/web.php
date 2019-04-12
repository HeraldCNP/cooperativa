<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('ejemplo', function (){
   return "Mi primera ruta";
});
Route::post('enviar', function (){
    return "enviando";
});
Route::get('ejemplo/{nombre}/{edad}', function ($nombre, $edad){
    return "Mi nombre es: ".$nombre." y tengo ".$edad." años";
});
Route::get('principal', function (){
   return view('principal');
});
Route::get('admin/index', function (){
    $datos = ['nombre' => 'david', 'edad' => '15'];
    return view('admin.index')->with('parametro', $datos);
});

Route::get('persona', 'PersonaController@index')->name('persona.index');

Route::get('persona/nuevo', 'PersonaController@create')->name('persona.create');

Route::post('persona/guardar', 'PersonaController@store')->name('persona.store');