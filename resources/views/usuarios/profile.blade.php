@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')

		<div class="row">
		    <div class="col-sm-12">
				<div class="list-group" >
					<div class="list-group-item">
						<h4>Perfil</h4>
					</div>							
					<div class="list-group-item">
						Mira lo que otros interatúan con la variedad de publicaciones de tiendas que podrían interesarte.
					</div>

					<div class="list-group-item col-sm-6">
						<div class="thumbnail">
						    <img src="images/default-img.gif" alt="...">
					        <div class="caption">
					    		<h3>{!!Auth::user()->get()->nombre . ' ' . Auth::user()->get()->apellido !!}</h3>
					    		<p>...</p>
					    		<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
					  		</div>
						</div>
					</div>
					<div class="list-group-item col-sm-6">
						Acciones
					</div>
				</div>
		    </div>
		</div>
		<br />
		<div class="row">

		    <div class="col-sm-8">
				<div class="list-group" >
					<div class="list-group-item">
						<h4><span class="label label-info">#Publicaciones <span class="glyphicon glyphicon-fire" aria-hidden="true"></span></span></h4>
					</div>							
					<div class="list-group-item">
						Mira lo que otros interatúan con la variedad de publicaciones de tiendas que podrían interesarte.
					</div>
					<div class="list-group-item-full">
						@include('layouts.bannerFront')
					</div>	
					<div class="list-group-item">
						No te pierdas las publicaciones pendientes
					</div>												
					<a href="#" class="list-group-item list-group-item-info">Cargar publicaciones <span class="badge">14<small>  ¡Publicaciones nuevas!</small></span></a>
				</div>
		    </div>

		    <div class="col-sm-4" style="float:right;"><!--style="position:fixed;z-index:1000;"-->

				<div class="list-group">
					<div class="list-group-item">
						<h4><span class="label label-info"> Usuario : {!!Auth::user()->get()->nombre . ' ' . Auth::user()->get()->apellido !!} <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></span></h4>
					</div>

					<div class="list-group-item">
						Accesos directos											
					</div>
					{!!link_to_route('usuarios.edit', $title = 'Modificar datos de mi cuenta', $parameters = Auth::user()->get()->id, $attributes = ['class'=>'list-group-item list-group-item-info'])!!}
				</div>	
		    </div>


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


		</div>


	</div><!-- Fin del div id contentIn -->
</div>
@stop