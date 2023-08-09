<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function(){
    return view('home');
});*/
Route::get('/', function(){
    return view('inicio');
});

Route::get('/curso', function(){
    return view('curso');
});

/**
 * Nuevas vistas a agregar
 * informacion
 * login o logueo
 * registro
 * administrador de registros
 *  */


//En desarrollo
//probando vista
Route::get('/listar', function () {
    return 'Listando contenido de notas';
});

Route::get('/listar/{id}', function ($id) {
    return 'Mostrando contenido Numero: '.$id;
});