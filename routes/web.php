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
=======
Route::resource('estadistica','estadisticaController');
>>>>>>> 2584a74a468868bdddc6826622146704dc271147
Route::get('aplicacion',function(){
	return view('aplicacion');
});
Route::get('nosotros',function(){
	return view('nosotros');
});



Auth::routes();
Route::get('auth/{provider}','Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\LoginController@handleProviderCallback');
