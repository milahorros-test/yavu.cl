@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		
		<div class="row">
		    <div class="col-md-6">

				<div class="list-group" >
					<div class="list-group-item">
						Publicaciones
					</div>							
					<div class="list-group-item"	>
						Mira lo que otros interatúan con la variedad de publicaciones de tiendas que podrían interesarte.
					</div>						
					<a href="#" class="list-group-item">Ir a publicaciones <span class="badge">14<small>  ¡Publicaciones nuevas!</small></span></a>
				</div>

		    </div>
		    <div class="col-md-6">

				<div class="list-group">
					<div class="list-group-item">
						Perfil, mi cuenta
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
					{!!link_to_route('usuarios.edit', $title = 'Ir a mi perfil', $parameters = Auth::user()->get()->id, $attributes = ['class'=>'list-group-item'])!!}
				</div>	

		    </div>
		    <div class="col-md-6">


				<div class="list-group">
					<div class="list-group-item">
						Mi empresa
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
					<a href="#" class="list-group-item">Saber más y registrar mi empresa</a>
				</div>

		    </div>

		    <div class="col-md-6">

				<div class="list-group" >
					<div class="list-group-item">
						Politicas y servicios
					</div>							
					<div class="list-group-item" style="height:80px;">
						Entérate de nuestras politicas para comenzar una actividad en Yavu.<span class="badge">14</span>
					</div>
					<a href="#" class="list-group-item">Leer políticas</a>
				</div>	

				<div class="list-group" >
					<div class="list-group-item">
						Informes
					</div>							
					<div class="list-group-item" style="height:80px;">
						Revisa estadisticas
					</div>
					<a href="#" class="list-group-item">Ir a publicaciones YA!</a>
					
				</div>	  

		    </div>
		</div>

	</div><!-- Fin del div id contentIn -->
</div>
@stop




