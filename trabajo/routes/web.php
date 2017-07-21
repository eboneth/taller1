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



/*rutas personalizadas*/

Route::get('/','EventoController@principal');
Route::get('normatividad','NormatividadController@principal');
Route::get('reinduccion',function(){
	return view('reinduccion');
});

Route::get('admin/evaluacion','EvaluacionController@mostrarSC');

Route::resource('evento','EventoController');
Route::get('admin/evento/{id}/destroy',[
	'uses'	=>	'EventoController@destroy',
	'as'	=>	'admin.evento.destroy'

	]);

Route::resource('admin/noticias','NoticiaController');
Route::get('admin/noticias/{id}/destroy',[
	'uses'	=>	'NoticiaController@destroy',
	'as'	=>	'admin.noticias.destroy'

	]);

Route::resource('admin/normatividad','NormatividadController');
Route::get('admin/normatividad/{id}/destroy',[
	'uses'	=>	'NormatividadController@destroy',
	'as'	=>	'admin.normatividad.destroy'

	]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('evaluacion/{email}','EvaluacionController@index');//borrar
Route::post('evaluacion','EvaluacionController@evaluar');
Route::post('evaluar','EvaluacionController@noindex');
Route::get('evaluacion',function(){
	return view('validar');
});
Route::put('calificacion/{idevaluacion}','EvaluacionController@update');
