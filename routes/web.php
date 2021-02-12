<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('master');
});
// Route::get('saludo', function () {
//     return "hello world";
// });
// Route::get('persona/insertar', function () {
//     return "se inserto a la persona";
// });
// Route::get('saludar/{nombre}/{edad}', function($nombre, $edad) {
//     return "hola ".$nombre." tienes ".$edad." años";
// });
Route::get('persona','PersonaController@index')->name('persona.index');
Route::get('persona/nuevo','PersonaController@create')->name('persona.nuevo');
Route::post('persona/guarda','PersonaController@store')->name('persona.guarda');
