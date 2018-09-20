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
Route::get('administradores', function(){
	return view ('grids');
});
Route::get('catedraticos', function(){
	return view ('grids2');
});
Route::get('estudiantes', function(){
	return view ('grids3');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
	
	Route::resource('administradores', 			'AdministradoresController');
	Route::resource('estudiantes', 				'EstudiantesController');
	Route::resource('catedraticos', 			'CatedraticosController');
});