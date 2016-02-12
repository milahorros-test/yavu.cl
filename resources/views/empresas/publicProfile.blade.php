{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/GestionarEstadosEmpresa.js')!!}
{!!Html::script('js/ajax/GestionarCoinsEmpresa.js')!!}
{!!Html::script('js/ajax/InteraccionPublicacionesEmpresa.js')!!}
@extends('layouts.front')
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

				@if(isset(Auth::user()->get()->id))
					@if($e->user_id == Auth::user()->get()->id)
						<div class="list-group">
							<div class="list-group-item">
								<h4><span class="label label-info">#Publicaciones&Estados <span class="glyphicon glyphicon-fire" aria-hidden="true"></span></span></h4>
							</div>

							<div class="list-group-item">
								Mira lo que otros interatúan con la variedad de publicaciones de tiendas que podrían interesarte.
							</div>					
							<div class="list-group-item">
								No te pierdas las publicaciones pendientes
							</div>		

							
							<div class="list-group-item">
								{!!Form::open(['action'=>'EstadoController@storeEstadoEmpresa', 'method'=>'POST'])!!}
									{!!Form::textarea('status',null,['class'=>'form-control-stat','placeholder'=>'¿Qué deseas compartir en yavu?', 'maxlength'=>'500', 'required'=>'required','style'=>'resize:none;', 'rows'=>'10', 'id'=>'status'])!!}
									{!!Form::hidden('user_id', Auth::user()->get()->id, ['id'=>'user_id'])!!}
									{!!Form::hidden('empresa_id', $e->id, ['id'=>'empresa_id'])!!}
									<input type="hidden" name="_token" value="{{csrf_token()}}" id="token" />

									{!!link_to('#!', $title="Publicar estado", $attributes = ['id'=>'publicar', 'class'=>'btn btn-success btn-xs'], $secure = null)!!}
									{!!link_to('#!', $title="Limpiar", $attributes = ['id'=>'limpiar', 'class'=>'btn btn-success btn-xs'], $secure = null)!!}											
						
								{!!Form::close()!!}		

								<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
									<!--
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									-->
									Publicacion creada correctamente
								</div>			
								<div id="msj-error" class="alert alert-error alert-dismissible" role="alert" style="display:none">
									<!--
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									-->
									El texto ingresado contiene caracteres no permitidos que no se guardarán.
								</div>										
							</div>	
						</div>
					@endif
				@endif

				<div>
					<div id="Estados">
					</div>
					{!!Form::hidden('idUltima', "0", ['id'=>'idUltima'])!!}									
				</div>

				
				<div>
					
					<div id="msj-estado" class="alert alert-dismissible list-group-item" role="alert" style="display:none;">
						<img width="30%"  src='/images/iconoCargando.gif'/>
					</div>
					<div id='msj-finPublicaciones' class="alert alert-dismissible list-group-item" role="alert" style="display:none;">
							No hay mas publicaciones.
					</div>

					<a id="CargarEstados" href="#!" class="list-group-item list-group-item-info">
						Cargar estados 
						<span id="EstadosNuevos" class="badge"></span>					
					</a>	
						
				</div>	
				
				<br>


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

		@endforeach
	</div>
</div>
@stop