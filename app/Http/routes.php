<?php
Route::get('/','FrontController@index');
Route::get('index','FrontController@index');
Route::get('login','FrontController@login');
Route::get('registro','FrontController@rregistro');
Route::get('contacto','FrontController@contacto');
Route::get('nosotros','FrontController@nosotros');
Route::get('terminos','FrontController@terminos');
Route::get('logout', 'LogController@logout');
Route::resource('usuarios','UserController');
Route::resource('empresas','EmpresaController');
Route::resource('admins','AdminController');
Route::resource('log', 'LogController');

