@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')

		<div class="row" style="margin-top:-35px;">

		    <div class="col-sm-8">
				<div class="list-group" >

					<div class="list-group-item">
						<div class="thumbnail">
						    <img src="images/default-img.gif" alt="...">
					        <div class="caption">

					    		{!!Auth::user()->get()->nombre . ' ' . Auth::user()->get()->apellido!!}
					    		{!!Auth::user()->get()->email!!}
					    		{!!Auth::user()->get()->ciudad!!}
					    		<p>
					    			<a href="#" class="btn btn-primary btn-xs" role="button">Button</a> 
					    			<a href="#" class="btn btn-default btn-xs" role="button">Button</a>
					    		</p>

					  		</div>
						</div>
					</div>

				</div>
		    </div>

		    <div class="col-sm-4"><!--style="position:fixed;z-index:1000;"-->

		    <!--
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

				  <div class="panel panel-default">

				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Información
				        </a>
				      </h4>
				    </div>

				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="list-group-item">
				      sadasdsadasd
				      </div>
				    </div>

				  </div>

				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Notificaciones
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="list-group-item">
				      asdasdasd
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Mensajes
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="list-group-item">
				      asdasdasdas
				      </div>
				    </div>
				  </div>
				</div>
			-->
			
				<div class="list-group">
					<div class="list-group-item">
						<h4>Información</h4>
					</div>

					<div class="list-group-item">
						Estado de coins
					</div>
					<div class="list-group-item">
						Estado de cuenta
					</div>
					<div class="list-group-item">
						Estado de empresas
					</div>	
					<div class="list-group-item">
						Noticias de las empresas a las que sigues
					</div>	
					<div class="list-group-item">
						Últimas novedades en yavu
					</div>	
					{!!link_to_route('usuarios.edit', $title = 'Modificar datos de mi cuenta', $parameters = Auth::user()->get()->id, $attributes = ['class'=>'list-group-item list-group-item-info'])!!}
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

		    <div class="col-sm-8" style="float:left;">
				<div class="list-group" >
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
					<a href="#" class="list-group-item list-group-item-info">Cargar publicaciones <span class="badge">14<small>  ¡Publicaciones nuevas!</small></span></a>
				</div>
		    </div>

		</div>


	</div><!-- Fin del div id contentIn -->
</div>
@stop