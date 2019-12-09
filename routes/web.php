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

Route::get('otra/{nombre?}', [function($nombre="Valor Default") {
    return view('prueba',compact('nombre'));
}])->where('nombre',"[a-z]+");

Route::get('otra2/{edad?}', function($edad){
    return view('prueba2',compact('edad'));
})->where('edad',"[0-9]+");

Route::get('blade',function(){
    $elementos=["jhjhdas","jhgjghj","hjjhgj"];
    return view('primera',compact('elementos'));
});

Route::resource('aulas','AulaController');
Route::resource('edificios','EdificioController');

