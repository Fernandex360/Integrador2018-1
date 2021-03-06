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
Route::get('/','PrincipalController@index')->name('inicio');
Route::resource('principal','PrincipalController');
Route::resource('denunciar','DenunciarController')->middleware('auth');

Route::get('denunciar','DenunciarController@index')->name('buscar')->middleware('auth');

Route::resource('reporte','ReporteController')->middleware('auth');
Route::resource('galeria','GaleriaController')->middleware('auth');
Route::resource('usuario','UsuarioController')->middleware('auth');

Route::resource('estadistica','estadisticaController');

Route::get('aplicacion',function(){
	return view('aplicacion');
});
Route::get('nosotros',function(){
	return view('nosotros');
});



Auth::routes();
Route::get('auth/{provider}','Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\LoginController@handleProviderCallback');

