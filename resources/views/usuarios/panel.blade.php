@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="content">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h2>Menú principal</h2>
		<table class="table" width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td rowspan="2">
					<div class="list-group" >
						<div class="list-group-item">
							Publicaciones
						</div>							
						<div class="list-group-item" style="height:281px;">
							Mira lo que otros interatúan con la variedad de publicaciones de tiendas que podrían interesarte.
						</div>
						<a href="#" class="list-group-item">Ir a publicaciones <span class="badge">14<small>  ¡Publicaciones nuevas!</small></span></a>
					</div>					
				</td>						
				<td>
					<div class="list-group" >
						<div class="list-group-item">
							Perfil, mi cuenta
						</div>							
						<div class="list-group-item" style="height:80px;">
							Mira tu perfil y añade nuevas características, completa tus datos y revisa el estado de tus coins.							
						</div>
						{!!link_to_route('usuarios.edit', $title = 'Ir a mi perfil', $parameters = Auth::user()->get()->id, $attributes = ['class'=>'list-group-item'])!!}
					</div>								
				</td>
				<td>
					<div class="list-group" >
						<div class="list-group-item">
							Empresas
						</div>							
						<div class="list-group-item" style="height:80px;">
							Inicia actividad en yavu.cl con tu empresa registrandote aquí
						</div>
						<a href="#" class="list-group-item">Saber más y registrar una empresa</a>
					</div>								
				</td>
			</tr>
			<tr>
				<td>
					<div class="list-group" >
						<div class="list-group-item">
							Politicas y servicios
						</div>							
						<div class="list-group-item" style="height:80px;">
							Entérate de nuestras politicas para comenzar una actividad en Yavu.<span class="badge">14</span>
						</div>
						<a href="#" class="list-group-item">Leer políticas</a>
					</div>								
				</td>
				<td>
					<div class="list-group" >
						<div class="list-group-item">
							Informes
						</div>							
						<div class="list-group-item" style="height:80px;">
							Revisa estadisticas
						</div>
						<a href="#" class="list-group-item">Ir a publicaciones YA!</a>
						
						
					</div>								
				</td>
			</tr>										
		</table>				
	</div><!-- Fin del div id contentIn -->
</div>
@stop




