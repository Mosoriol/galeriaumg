<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Auth::routes();

Route::view('/', 'welcome');

Route::get('/inicio', 'InicioController@index');


Route::view('/datos', 'modulos.datos');
Route::put('/datos', 'UsuariosController@update');

Route::get('/usuarios', 'UsuariosController@index');
Route::get('/crear-usuarios', 'UsuariosController@create');
Route::post('/crear-usuarios', 'UsuariosController@store');
Route::delete('/usuarios/{id}', 'UsuariosController@destroy');


Route::get('/slide', 'SlideController@index');
Route::post('/slide', 'SlideController@store');
Route::delete('/slide/{id}', 'SlideController@destroy');

Route::get('/categoriasproyectos', 'CategoriasproyectosController@index');
Route::post('/categoriasproyectos', 'CategoriasproyectosController@store');
Route::put('/categoriaproyectos/{id}', 'CategoriasproyectosController@update');
Route::delete('/ctg/{id}', 'CategoriasproyectosController@destroy');

Route::get('/proyectos', 'ProyectosController@index');
Route::get('/crear-proyecto', 'ProyectosController@create');
Route::post('/crear-proyecto', 'ProyectosController@store');

//frontend
Route::get('/', 'FrontEndController@inicio');