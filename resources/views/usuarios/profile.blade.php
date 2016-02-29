{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/GestionarEstados.js')!!}
{!!Html::script('js/ajax/GestionarInteraccionesEstadosUsuario.js')!!}
{!!Html::script('js/ajax/GestionarCoins.js')!!}
{!!Html::script('js/ajax/InteraccionPublicaciones.js')!!}
@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		<div class="row" style="margin-top:-35px;">
			@include('alerts.alertFields')
			@include('alerts.errorsMessage')
			@include('alerts.successMessage')
			@include('alerts.warningMessage')
				<div class="col-sm-8">
					<div class="list-group" >
						<div class="list-group-item-full-header">
							<h6>{!!strtoupper(Auth::user()->get()->nombre . ' ' . Auth::user()->get()->apellido)!!}</h6>
						</div>
						<div class="">
							<div class="thumbnail">             
								<img src="http://www.makingdifferent.com/wp-content/uploads/2015/08/An-Overview-of-the-Work-of-a-Ruby-on-Rails-Developer.png" alt="...">
								<img src="http://2.bp.blogspot.com/_jhe_gqSPyFA/TDSQaThuD2I/AAAAAAAAADI/6FSxNbQcgxw/Albert+Einstein.jpg" alt="..." class="img-circle">                                 
								<div class="caption">
									{!!Auth::user()->get()->email!!}
									{!!Auth::user()->get()->ciudad!!}
									<p>
										<a href="#!" class="btn btn-primary btn-xs" role="button">Button</a> 
										<a href="#!" class="btn btn-default btn-xs" role="button">Button</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="list-group">
						<div class="list-group-item-full-header">
							<h6>PUBLICAR NUEVO ESTADO</h6>
						</div>
						{!!Form::open(['action'=>'EstadoController@store', 'method'=>'POST'])!!}
						{!!Form::textarea('status',null,['class'=>'form-control-stat','placeholder'=>'¿Qué deseas compartir en yavu?', 'maxlength'=>'500', 'required'=>'required','style'=>'resize:none;', 'rows'=>'10', 'id'=>'status'])!!}
						{!!Form::hidden('user_id', Auth::user()->get()->id, ['id'=>'user_id'])!!}
						<input type="hidden" name="_token" value="{{csrf_token()}}" id="token" />
						<div class="list-group-item">
							{!!link_to('#!', $title="Publicar estado", $attributes = ['id'=>'publicar', 'class'=>'btn btn-success btn-xs'], $secure = null)!!}
							{!!link_to('#!', $title="Limpiar", $attributes = ['id'=>'limpiar', 'class'=>'btn btn-success btn-xs'], $secure = null)!!}                                           
							{!!Form::close()!!}     
							<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
								Publicacion creada correctamente
							</div>          
							<div id="msj-error" class="alert alert-error alert-dismissible" role="alert" style="display:none">
								El texto ingresado contiene caracteres no permitidos que no se guardarán.
							</div>                                      
						</div>  
					</div>                      
					<div id="e">
						<div id="Estados"></div>
						{!!Form::hidden('idUltima', "0", ['id'=>'idUltima'])!!}                                 
					</div>
					<div>
						<div id="msj-estado" class="alert alert-dismissible list-group-item" role="alert" style="display:none;">
							<img width="30%"  src='/images/iconoCargando.gif'/>
						</div>
						<div id='msj-finPublicaciones' class="alert alert-dismissible list-group-item-warning" role="alert" style="display:none;">
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
						<div class="list-group-item-full-header">
							<h6>INFORMACIÓN</h6>
						</div>
						<div class="list-group-item">
							Coins 
							<span id="CantidadCoins" style="float:right;" class="label label-warning">
								<img src="http://i601.photobucket.com/albums/tt93/tbg8904/Gaia%20Icon/Coins.png" width="16px" height="16px">
							</span>
						</div>
						<div class="list-group-item">
							Estado usuario
							<span id="EstadoUsuario" style="float:right;" class="label label-success">
							<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
									{!!Auth::user()->get()->estado!!}
							</span>
						</div>
					</div>
					<div class="list-group"  id="EstadoEmpresa">
						<div class="list-group-item-full-header">
							<h6>MI(S) EMPRESA(S)
								<span style="float:right;font-size: 0.9em;" class="label label-success">
									<a href={!! URL::to('empresas/create/') !!}>REGISTRAR PYME</a>
								</span>
							</h6>
						</div>
					</div>
					<div class="list-group">                    
						<div class="list-group-item">
							<h6>ACCESOS RÁPIDOS</h6>
						</div>
						<a class="list-group-item list-group-item-warning" href="{!! URL::to('/feeds') !!}">Ir a publicaciones</a>
						{!!link_to_route('usuarios.edit', $title = 'Modificar datos de mi cuenta', $parameters = Auth::user()->get()->id, $attributes = ['class'=>'list-group-item list-group-item-info'])!!}
						<a href="{!!URL::to('dashboard')!!}" class="list-group-item list-group-item-warning">Volver a dashboard</a>
						<a href="{!!URL::to('sitemap')!!}" class="list-group-item list-group-item-warning">Ir al Sitemap</a>
					</div>  
				</div>
		</div>
	</div><!-- Fin del div id contentIn -->
</div>
@stop
<script>

		function eliminarEstado(id){
			$("#publicacion"+id).fadeOut();
		}

		function Interactuar(valor){
				var status_id = valor.replace('estado_','');
				var user_id = $("#user_id").val();
				var token = $("#token").val();
				var route = "http://localhost:8000/interactuar";
				$.ajax({
					url: route,
					headers: {'X-CSRF-TOKEN': token},
					type: 'POST',
					dataType: 'json',
					data: {
						status_id: status_id,
						user_id: user_id
					},
					success:function(){
						$('#'+valor).addClass("text-info").fadeIn();
						console.log('exito');
						ContarInteracciones(status_id);
					}          
				}); 
				ContarInteracciones(status_id);
				$('#'+valor).removeClass("text-info").fadeIn();
			return true;
		}  

		function ContarInteracciones(status_id){
			status_id = status_id;
			var route = "http://localhost:8000/contarinteracciones/"+status_id;
			var user_id = $("#user_id");
			var Contador = 0;
			$.get(route, function(res){
				$(res).each(function(key,value){
						Contador += 1;
				});        
				$("#badge_"+status_id).text(Contador);
			});   
		}    

</script>