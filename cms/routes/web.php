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


//frontend
Route::get('/', 'FrontEndController@inicio');

Route::view('/datos', 'modulos.datos');
Route::put('/datos', 'UsuariosController@update');
Route::get('/usuarios', 'UsuariosController@index');
Route::get('/crear-usuarios', 'UsuariosController@create');
Route::post('/crear-usuarios', 'UsuariosController@store');
Route::delete('/usuarios/{id}', 'UsuariosController@destroy');


Route::get('/slide', 'SlideController@index');
Route::post('/slide', 'SlideController@store');