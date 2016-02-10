{!!Html::script('js/jquery.js')!!}
@extends('layouts.frontadm')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')

<!--		
		@foreach($empresa as $e)	
		<h4>Perfil publico de : {{$e->nombre}}</h4>
		Datos para mostrar en el perfil publico
		Campo : {{$e->rut}}<br>
		Campo : {{$e->email}}<br>
		Campo : {{$e->direccion}}<br>
		Campo : {{$e->ciudad}}<br>
		Campo : {{$e->nombre_encargado}}<br>
		Campo : {{$e->fecha_creacion}}<br>
		Campo : {{$e->password}}<br>
		@endforeach
-->
		@foreach($empresa as $e)
			<div class="row" style="margin-top:-35px;">
				<div class="col-sm-8">
					<div class="list-group" >
						<div class="list-group-item">
							
							<h4>Perfil publico de : {{$e->nombre}}</h4>
						</div>
						<div class="list-group-item">
							<div class="thumbnail">
								<img src="/images/default-img.gif" alt="...">
								<div class="caption">
									
									Campo : {{$e->email}}<br>
									Campo : {{$e->direccion}}<br>
									Campo : {{$e->ciudad}}<br>
								
									<p>
										<a href="#!" class="btn btn-primary btn-xs" role="button">Button</a> 
										<a href="#!" class="btn btn-default btn-xs" role="button">Button</a>
									</p>

								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-sm-4"><!--style="position:fixed;z-index:1000;"-->

			   
				
					<div class="list-group">
						<div class="list-group-item">
							<h4>Información</h4>
						</div>
						<div class="list-group-item">
							Últimas novedades en yavu
						</div>	
						@if(Auth::user()->check())
							{!!link_to_route('usuarios.edit', $title = 'Modificar datos de mi cuenta', $parameters = Auth::user()->get()->id, $attributes = ['class'=>'list-group-item list-group-item-info'])!!}
							
							<a href="{!!URL::to('dashboard')!!}" class="list-group-item list-group-item-warning">Volver a dashboard</a>
							
							<a href="{!!URL::to('sitemap')!!}" class="list-group-item list-group-item-warning">Ir al Sitemap</a>
						@endif
					</div>	
				
				</div>

			</div>

			<br />

			<div class="row" style="margin-top:-40px;">




			<!-- ESTO se va a validar siempre que el cliente tenga una empresa

				<div class="col-sm-4" style="float:right;">

					<div class="list-group">
						<div class="list-group-item">
							<h4><span class="label label-info">#MiEmpresa <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></span></h4>
						</div>							
						<div class="list-group-item">
							Inicia actividad en yavu.cl con tu empresa registrandote aquí.<br>

						</div>
						<a href="{!!URL::to('/empresas/create')!!}" class="list-group-item list-group-item-warning">Saber más e ir a registrar mi empresa</a>
					</div>

				</div>		    
			-->

				<div class="col-sm-8">
						@include('alerts.alertFields')
						@include('alerts.errorsMessage')
						@include('alerts.successMessage')
						@include('alerts.warningMessage')

						
					<div id="Estados">
					</div>
					
					<a id="CargarEstados" href="#!" class="list-group-item list-group-item-info">Cargar estados 
						<span id="EstadosNuevos" class="badge"></span>
					</a>	

				</div>

			</div>
		@endforeach
	</div>
</div>
@stop