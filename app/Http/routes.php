<?php

/*Gestión del front*/
Route::get('/','FrontController@index');
Route::get('index','FrontController@index');
Route::get('login','FrontController@login');
Route::get('registro','FrontController@registro');
Route::get('yavucoins','FrontController@yavucoins');
Route::get('ysorteos','FrontController@ysorteos');
Route::get('listaempresas/{empresa}','EmpresaController@ListaEmpresas');
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
//Route::get('estadosempresa/{idUltima}/{empresa}', 'FeedController@CargarEstadoEmpresa');

Route::get('cargarfeeds/{idUltima}/', 'FeedController@CargarFeeds');
Route::get('cargarfeedsempresa/{idUltima}/{empresa}', 'FeedController@CargarFeedsEmpresa');

Route::get('contarestados', 'EstadoController@ContarEstados');
Route::resource('estados','EstadoController');
Route::get('buscarusuario/{nombre}', 'UserController@BuscarUsuarios');
/*Gestión de estados*/

/*Gestión de coins*/
Route::resource('coins','CoinController');
Route::get('reports','CoinController@index');
Route::get('contarcoins', 'CoinController@ContarCoins');
Route::get('historialcoins', 'CoinController@HistorialCoins');
/*Gestión de coins*/

/*Gestión de ingreso login*/
Route::resource('log', 'LogController');
/*Gestión de ingreso login*/

/*Gestión de Usuarios*/
Route::resource('interactuar', 'InteraccionEstadoController');
Route::get('contarinteracciones/{status_id}', 'InteraccionEstadoController@ContarInteracciones');
Route::get('estadosusuario/{idUltima}', 'EstadoController@CargarEstados');
Route::resource('usuarios','UserController');
Route::resource('dashboard', 'UserController@dashboard');
Route::resource('profile', 'UserController@profile');
Route::get('infoempresas/{user_id}','UserController@InfoEmpresas');
/*Gestión de Usuarios*/

/*Gestión de Empresas*/
Route::resource('empresas','EmpresaController');
Route::get('empresa/{empresa}/', 'EmpresaController@MostrarEmpresaPublica');
Route::get('listaempresas', 'EmpresaController@ListaEmpresas');
Route::get('solicitareliminacionempresa/{id}', 'EmpresaController@SolicitarEliminacion');
Route::get('buscarempresa/{nombre}', 'EmpresaController@BuscarEmpresas');
/*Gestión de Empresas*/
/*Gestión de Servicios*/
Route::resource('servicios','ServicioController');
/*Gestión de Servicios*/

/*Gestión de Sorteos*/
Route::resource('sorteos', 'SorteoController');
Route::get('listasorteos', 'SorteoController@ListaSorteos');
Route::get('buscarsorteo/{nombre}', 'SorteoController@BuscarSorteos');
/*Gestión de Sortes*/

/*Gestión de Admins*/
Route::resource('admins','AdminController');
/*Gestión de Admins*/

/*Gestión de Notificaciones -> Pops*/
Route::resource('pops', 'PopController');
/*Gestión de Notificaciones -> Pops*/


/*Gestión de Encuestas*/
Route::resource('encuestas', 'EncuestaController');
/*Gestión de Encuestas*/

/*Gestión de Preguntas*/
Route::resource('preguntas', 'PreguntaController');
/*Gestión de Preguntas*/

/*Gestión de Alternativas*/
Route::resource('alternativas', 'AlternativaController');
/*Gestión de Alternativas*/

/*Gestión de Servicio*/
Route::resource('servicios', 'ServicioController');
/*Gestión de Servicio*/


/*Gestión de Banners */
Route::resource('banners', 'BannerController');
/*Gestión de Banners */

/*Gestión de Categorías */
Route::resource('categorias', 'CategoriaController');
/*Gestión de Categorías */

/*Gestión de Pago*/
Route::resource('pagos', 'PagoController');
/*Gestión de Pago*/

/*Gestión de Beneficio*/
Route::resource('beneficios', 'BeneficioController');
/*Gestión de Beneficio*/

/*Gestión de Role*/
Route::resource('roles', 'RoleController');
/*Gestión de Role*/

/*Gestión de Evento*/
Route::resource('eventos', 'EventoController');
/*Gestión de Evento*/

/*Gestión de Banners */
Route::resource('feeds', 'FeedController');
/*Gestión de Banners */

/*Gestión de  Interacciones */
Route::resource('interacciones', 'InteraccionController');
/*Gestión de Interacciones */


/*Gestión de  Interes */
Route::resource('intereses', 'InteresController');
/*Gestión de Interes */

/*Gestión de  Feeds */
Route::resource('feeds', 'FeedController');
/*Gestión de Feeds */
