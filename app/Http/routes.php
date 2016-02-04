<?php

Route::get('/','FrontController@index');
Route::get('index','FrontController@index');
Route::get('login','FrontController@login');
Route::get('registro','FrontController@registro');
Route::get('contacto','FrontController@contacto');
Route::get('nosotros','FrontController@nosotros');
Route::get('terminos','FrontController@terminos');
Route::get('logout', 'LogController@logout');
Route::get('sitemap', function(){
	return view('sitemap');
});
Route::get('estados/{user_id}', 'EstadoController@CargarEstados');

Route::resource('log', 'LogController');

Route::resource('usuarios','UserController');
Route::resource('panel', 'UserController@panel');
Route::resource('profile', 'UserController@profile');

Route::resource('estados','EstadoController');

Route::resource('empresas','EmpresaController');
Route::resource('servicios','ServicioController');

Route::resource('admins','AdminController');



