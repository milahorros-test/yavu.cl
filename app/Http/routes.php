<?php
Route::get('/','FrontController@index');
Route::get('index','FrontController@index');
Route::get('login','FrontController@login');
Route::get('acceso','FrontController@acceso');
Route::get('registro','FrontController@rregistro');
Route::get('contacto','FrontController@contacto');
Route::get('nosotros','FrontController@nosotros');
Route::get('logout', 'LogController@logout');
Route::resource('usuarios','UserController');
Route::resource('empresas','EmpresaController');
Route::resource('log', 'LogController');
Route::resource('access', 'AccesoController');
//Route::resource('acceso', 'AccesoController');
