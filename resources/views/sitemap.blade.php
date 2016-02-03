@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		<div class="row" style="margin-top:-35px;">

		   
		    <div class="col-sm-7"><!--style="position:fixed;z-index:1000;"-->
			
				<div class="list-group">
					<div class="list-group-item">
						<h4>Yavu.cl Sitemap</h4>
					</div>

					<div class="list-group-item">
						<ul>
							<li><strong>Usuarios Logueados</strong></li>	
							<li>Publicaciones</li>	
							<li>
								Listado de empresas
								<ol>
									<li>
										Panel de empresa
									</li>
								</ol>
							</li>	
							<li>
								Yavu Coins
								<ol>
									<li>
										Sorteos
									</li>
								</ol>
							</li>	
							<li>Mi cuenta
								<ol>
									<li>
										Actualizar Datos
									</li>
									<li>
										Coins
										<ol>
											<li>
												Registros históricos
											</li>
										</ol>
									</li>
									<li>
										Mi(s) Empresa(s)
										<ol>
											<li>
												Registros de empresas (Crear)
											</li>
											<li>
												Crear publicaciones
											</li>
											<li>
												Información de empresas (Editar)
											</li>
											<li>
												Crear sorteos
											</li>
											<li>
												Creación \ Edición perfil público
											</li>
											<li>
												Banner
											</li>
											<li>
												Interacciones \ Estadísticas
											</li>
											<li>
												Configuración Empresa
												<ol>
													<li>
														Asignar roles
													</li>
													<li>
														Servicios activos
														<ol>
															<li>
																Solicitar servicio
															</li>															
														</ol>
													</li>
													<li>
														Pagos \ Facturas
													</li>
													<li>
														Eliminar Empresa (Vía solicitud)
													</li>
												</ol>
											</li>
											<li>
												Notificaciones \ Mensajes
											</li>
											<li>
												Encuestas
											</li>
										</ol>
									</li>
								</ol>
							</li>	
						</ul>
					</div>
					<a href="{!!URL::to('panel')!!}" class="list-group-item list-group-item-warning">Volver a panel</a>
				</div>				
		    </div>
		    <div class="col-sm-5">
				<div class="list-group">
					<div class="list-group-item">
						<h4>Yavu.cl Sitemap</h4>
					</div>

					<div class="list-group-item">
						<ul>
							<li>
								<strong>Footer Área</strong>
							</li>
							<li>
								¿Quiénes somos?
							</li>	
							<li>
								Términos y Condiciones
								<ol>
									<li>
										Usuarios
									</li>
									<li>
										Empresas
									</li>
									<li>
										Sorteos
									</li>
								</ol>
								<li>
									Contacto
								</li>
							</li>
						</ul>
					</div>
				</div>	
		    </div>	
		    <div class="col-sm-5">
				<div class="list-group">
					<div class="list-group-item">
						<h4>Yavu.cl Sitemap</h4>
					</div>

					<div class="list-group-item">
						<ul>
							<li>
								<strong>Admin Panel (Intranet)</strong>
							</li>
							<li>
								Servicios
								<ol>
									<li>
										Registro de servicios
									</li>
									<li>
										Listado de servicios
									</li>
								</ol>
							</li>
							<li>
								Empresas
								<ol>
									<li>
										Registro de empresas
									</li>
									<li>
										Listado de empresas
										<ol>
											<li>
												Información de Empresa
											</li>
											<li>
												Asignar servicio
											</li>
											<li>
												Registro de pagos
											</li>
										</ol>
									</li>
								</ol>
							</li>
							<li>
								Morosos \ Pendientes
								<ol>
									<li>
										Listado de empresas con morosidad
									</li>
									<li>
										Listado de pendientes de activación
									</li>
									<li>
										Listado de pendientes de eliminación
									</li>
								</ol>
							</li>
						</ul>
					</div>
				</div>	
		    </div>	
	    </div>
	</div><!-- Fin del div id contentIn -->
</div>
@stop