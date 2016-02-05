@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h4 style="margin-top:-40px;"></h4>
		<div class="row">
		    <div class="col-sm-8">
				<div class="list-group" >
					<div class="list-group-item">
						@if (Auth::user()->get()->sexo == 'Masculino')
							Bienvenido! {!!Auth::user()->get()->nombre!!}
						@elseif (Auth::user()->get()->sexo == 'Femenino')
							Bienvenida! {!!Auth::user()->get()->nombre!!}
						@endif
					</div>					
					<div class="list-group-item">
						<h4><span class="label label-info">#Publicaciones <span class="glyphicon glyphicon-fire" aria-hidden="true"></span></span></h4>
					</div>							
					<div class="list-group-item">
						Mira lo que otros interatúan con la variedad de publicaciones de tiendas que podrían interesarte.
					</div>
					<div class="list-group-item-full-classic">
						@include('layouts.bannerFront')
					</div>	
					<div class="list-group-item">
						No te pierdas las publicaciones pendientes
					</div>												
					<a href="#" class="list-group-item list-group-item-info">Ir a publicaciones <span class="badge">14<small>  ¡Publicaciones nuevas!</small></span></a>
				</div>
		    </div>

		    <div class="col-sm-4"><!--style="position:fixed;z-index:1000;"-->
				<div class="list-group">
					<div class="list-group-item">
						<h4><span class="label label-info">#MiCuenta <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></span></h4>
					</div>							
					<div class="list-group-item">
						Mira tu perfil y añade nuevas características, completa tus datos y revisa el estado de tus coins.<br>
						<ol>
							<li>Completar todos sus datos (actividad necesaria para comenzar a ganar coins) {rut, nombre completo, nickname para que aparezca en los sorteos, teléfono, etc} ; o </li>
							<li>Podrá registrar su empresa desde el mismo panel y accedería a la vista de empresa desde ahí (tal como se entiende desde el .mapa del sitio que les había mandado anteriormente).</li>
							<li>Actualización/ingreso de datos.</li>
							<li>Saldo/cartola de coins (registro histórico de carga).</li>
							<li>Cambio de contraseña.</li>
							<li>Mi empresa (aquí es donde se registra la empresa).</li>
						</ol>			
					</div>
					<!--{!!link_to_route('usuarios.edit', $title = 'Ir a mi perfil', $parameters = Auth::user()->get()->id, $attributes = ['class'=>'list-group-item list-group-item-info'])!!}-->
					<a href="{!!URL::to('/profile')!!}" class="list-group-item list-group-item-info">Ir a mi perfil</a>
				</div>	
				<div class="list-group">
					<div class="list-group-item">
						<h4><span class="label label-info">#MiEmpresa <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></span></h4>
					</div>							
					<div class="list-group-item">
						Inicia actividad en yavu.cl con tu empresa registrandote aquí.<br>
						<ol>
							<li>registro de empresa</li>
							<li>actualización de datos</li>
							<li>creación/edición de perfil (con vista previa)</li>
							<li>interacciones/estadísticas (aquí iría el futuro data mining)</li>
							<li>configuración de empresa (aquí podrá configurar cosas tales como:</li>
							<li>
								<ul>
									<li>ver servicio activo</li>
									<li>asignar Roles a otro usuario</li>
									<li>ver pagos/facturas </li>									
								</ul>
							</li>
						</ol>
					</div>
					<a href="{!!URL::to('/empresas/create')!!}" class="list-group-item list-group-item-warning">Saber más e ir a registrar mi empresa</a>
				</div>

				<div class="list-group" >
					<div class="list-group-item">
					
						<h4><span class="label label-info">#Politicas&Servicios <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span></h4>
					</div>							
					<div class="list-group-item" style="height:80px;">
						Entérate de nuestras politicas para comenzar una actividad en Yavu.<span class="badge">14</span>
					</div>
					<a href="#" class="list-group-item list-group-item-info">Leer políticas</a>
				</div>	

				<div class="list-group" >
					<div class="list-group-item">
						<h4><span class="label label-info">#Informes <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span></h4>
					</div>							
					<div class="list-group-item" style="height:80px;">
						Revisa estadisticas
					</div>
					<a href="#" class="list-group-item list-group-item-info">Ir a informes</a>
					
				</div>	  

				<div class="list-group" >
					<div class="list-group-item">
						<h4><span class="label label-info">#Configuraciones <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></span></h4>
					</div>							
					<div class="list-group-item" style="height:80px;">	
						Revisa algunas configuraciones de seguridad para ti.					
					</div>
					<a href="#" class="list-group-item list-group-item-info">Ir a configuraciones</a>
				</div>	

				<div class="list-group" >
					<div class="list-group-item">
						<h4><span class="label label-info">#AyudasGenerales <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></span></h4>
					</div>							
					<div class="list-group-item" style="height:80px;">
						Revisa nuestras sugerencias para una mejor experiencia en yavu.
					</div>
					<a href="#" class="list-group-item list-group-item-info">Ir a ayudas generales</a>
				</div>	

		    </div>

		</div>

	</div><!-- Fin del div id contentIn -->
</div>
@stop




