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
Route::resource('denunciar','DenunciarController');
<<<<<<< HEAD
Route::resource('administrador','AdminController');
Route::resource('estadistica','estadisticaController');
=======

Route::resource('administrador','AdminController');

Route::resource('estadistica','estadisticaController');

>>>>>>> 335f33ae50a394ca3d0447704debd24403bd2f91
Route::get('aplicacion',function(){
	return view('aplicacion');
});
Route::get('nosotros',function(){
	return view('nosotros');
});



Auth::routes();
Route::get('auth/{provider}','Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\LoginController@handleProviderCallback');
