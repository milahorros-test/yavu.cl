<?php

/*Gestión del front*/
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
/*Gestión del front*/

/*Gestión de estados*/
Route::get('estadosusuario', 'EstadoController@CargarEstados');
Route::get('contarestados', 'EstadoController@ContarEstados');
Route::resource('estados','EstadoController');
Route::get('buscarusuario/{nombre}', 'UserController@BuscarUsuarios');
/*Gestión de estados*/

/*Gestión de coins*/
Route::get('contarcoins', 'CoinController@ContarCoins');
/*Gestión de coins*/

/*Gestión de ingreso login*/
Route::resource('log', 'LogController');
/*Gestión de ingreso login*/

/*Gestión de Usuarios*/
Route::resource('usuarios','UserController');
Route::resource('dashboard', 'UserController@dashboard');
Route::resource('profile', 'UserController@profile');
/*Gestión de Usuarios*/

/*Gestión de Empresas*/
Route::resource('empresas','EmpresaController');
Route::get('perfilpublico/{empresa}', 'EmpresaController@MostrarEmpresaPublica');
/*Gestión de Empresas*/
/*Gestión de Servicios*/
Route::resource('servicios','ServicioController');
/*Gestión de Servicios*/


/*Gestión de Admins*/
Route::resource('admins','AdminController');
/*Gestión de Admins*/