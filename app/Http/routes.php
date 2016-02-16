<?php

/*Gestión del front*/
Route::get('/','FrontController@index');
Route::get('index','FrontController@index');
Route::get('login','FrontController@login');
Route::get('registro','FrontController@registro');
Route::get('ycoins','FrontController@ycoins');
Route::get('ysorteos','FrontController@ysorteos');
Route::get('yempresas','FrontController@yempresas');
Route::get('contacto','FrontController@contacto');
Route::get('nosotros','FrontController@nosotros');
Route::get('terminos','FrontController@terminos');
Route::get('logout', 'LogController@logout');
Route::get('sitemap', function(){
	return view('sitemap');
});
/*Gestión del front*/

/*Gestión de estados*/
Route::resource('estadoempresa', 'EstadoEmpresaController');
Route::get('estadosempresa/{idUltima}/{empresa}', 'EstadoEmpresaController@CargarEstadoEmpresa');
Route::get('contarestados', 'EstadoController@ContarEstados');
Route::resource('estados','EstadoController');
Route::get('buscarusuario/{nombre}', 'UserController@BuscarUsuarios');
/*Gestión de estados*/

/*Gestión de coins*/
Route::resource('coins','CoinController');
Route::get('contarcoins', 'CoinController@ContarCoins');
Route::get('historialcoins', 'CoinController@HistorialCoins');
/*Gestión de coins*/

/*Gestión de ingreso login*/
Route::resource('log', 'LogController');
/*Gestión de ingreso login*/

/*Gestión de Usuarios*/
Route::resource('interactuar', 'InteraccionEstadoController');
Route::get('estadosusuario/{idUltima}', 'EstadoController@CargarEstados');
Route::resource('usuarios','UserController');
Route::resource('dashboard', 'UserController@dashboard');
Route::resource('profile', 'UserController@profile');
Route::get('infoempresas/{user_id}','UserController@InfoEmpresas');
/*Gestión de Usuarios*/

/*Gestión de Empresas*/
Route::resource('empresas','EmpresaController');
Route::get('empresa/{empresa}/', 'EmpresaController@MostrarEmpresaPublica');
Route::get('solicitareliminacionempresa/{id}', 'EmpresaController@SolicitarEliminacion');
/*Gestión de Empresas*/
/*Gestión de Servicios*/
Route::resource('servicios','ServicioController');
/*Gestión de Servicios*/

/*Gestión de Sorteos*/
Route::resource('sorteos', 'SorteoController');
/*Gestión de Sortes*/

/*Gestión de Admins*/
Route::resource('admins','AdminController');
/*Gestión de Admins*/