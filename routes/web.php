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

Route::get('/principal', function () {
    return view('contenido/contenido');
});

Route::get('/usr2/{id}', function ($id) {
    return "Mostrando datos del usuario: {$id}";
})->where ('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if($nickname){
      return "Saludos {$name} tu nickname es {$nickname}";
    }else{
      return "Saludos {$name} tú no tienes apodo";
    }
});
