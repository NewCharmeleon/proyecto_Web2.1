<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('persona');
});
//faltan rutas
/*Route::get('/{nombre}', function($nombre){
    return $nombre;
    
    
});*/
/*Route::get('/{nombre}/{apellido}', function($nombre,$apellido){
    return "Hola Soy $nombre $apellido";
    
    
});*/
Route::get('/personas', 'PersonaController@personas');
Route::get('/personas/{apellido}', 'PersonaController@personas');
Route::get('/personas/nuevo', 'PersonaController@nuevo');

Route::get('/personas/{id}/borrar', 'PersonaController@borrar');
//Route::resources('/personas','PersonaController');
    

