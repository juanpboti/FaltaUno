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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/','HomeController@index');
Route::get('/faqs', 'HomeController@faqs');
// Route::get('/login', 'HomeController@login');
Route::get('/nosotros', 'HomeController@nosotros');
//Route::get('register', 'HomeController@register');
Route::post('/exito', 'PartidosController@crear');

Route::get('partidos', 'PartidosController@partidos');

Route::get('partidos/eliminar/{id}', 'PartidosController@eliminar');