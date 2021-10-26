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
Route::post('/inicio', 'InicioController@logo');
Route::post('/inicio', 'InicioController@datosGenerales');


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

Route::get('/categoriasb', 'CategoriasBController@index');
Route::post('/categoriasb', 'CategoriasBController@store');
Route::put('/categoriab/{id}', 'CategoriasBController@update');
Route::delete('/ctgb/{id}', 'CategoriasBController@destroy');

Route::get('/proyectos', 'ProyectosController@index');
Route::get('/crear-proyecto', 'ProyectosController@create');
Route::post('/crear-proyecto', 'ProyectosController@store');
Route::get('/proyecto/{proyectos}/edit', 'ProyectosController@edit');
Route::put('/proyecto/{proyectos}', 'ProyectosController@update')->name('actualizar-proyecto');
Route::delete('eliminar-proyecto/{proyectos}', 'ProyectosController@destroy')->name('eliminar-proyecto');


Route::get('/biografias', 'BiografiasController@index');
Route::get('/crear-biografia', 'BiografiasController@create');
Route::post('/crear-biografia', 'BiografiasController@store');
Route::get('/biografia/{biografias}/edit', 'BiografiasController@edit');
Route::put('/biografia/{biografias}', 'BiografiasController@update')->name('actualizar-biografia');
Route::delete('eliminar-biografia/{biografias}', 'BiografiasController@destroy')->name('eliminar-biografia');


//galeria de proyectos
Route::get('galeria/{id}', 'GaleriasController@create');
Route::post('galeria/{id}', 'GaleriasController@store');
Route::delete('eliminar-img/{id}', 'GaleriasController@destroy');

//galeria de biografias

Route::get('galeriab/{id}', 'GaleriasBController@create');
Route::post('galeriab/{id}', 'GaleriasBController@store');
Route::delete('eliminar-img/{id}', 'GaleriasBController@destroy');

Route::get('/mensajes', 'MensajeController@index');
Route::get('/leer-mensaje/{id}', 'MensajeController@show');

//frontend
Route::get('/', 'FrontEndController@inicio');

Route::get('Historia', 'FrontendController@Historia');
Route::get('Pensum', 'FrontendController@Pensum');

Route::get('Proyectos-todos', 'FrontEndController@Proyectos');
Route::get('Proyecto/{id}', 'FrontEndController@Proyecto');

Route::get('Biografias-todos', 'FrontEndController@Biografias');
Route::get('Biografia/{id}', 'FrontEndController@Biografia');

Route::post('/', 'FrontEndController@Mensajes');