<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'InfoController@home')->name('home');

Route::post('/index','InfoController@index')->name('index');

Route::get('/how-work','InfoController@howWork')->name('how-work');
Route::get('finalidad','InfoController@finalidad')->name('finalidad');
Route::get('confirmar-pago/{id}','InfoController@confirmarPago')->name('confirmarPago');

Route::get('ingles-idioma-universal','InfoController@inglesIdiomaUniversal')->name('ingles-idioma-universal');
Route::get('como-afecta','InfoController@comoAfecta')->name('como-afecta');
Route::get('social','InfoController@social')->name('responsabilidad-social');
Route::get('subvencion-preferencial','InfoController@subvencion')->name('subvencion');

Route::get('how-work/elementary','ModuloController@elementary')->name('elementary');
Route::get('how-work/preliminary','ModuloController@preliminary')->name('preliminary');
Route::get('how-work/higher','ModuloController@higher')->name('higher');
Route::get('vision','ModuloController@vision')->name('vision');
Route::get('mision','ModuloController@mision')->name('mision');


