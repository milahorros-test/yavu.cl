{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/HistorialCoins.js')!!}
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

		   <div class="col-sm-4">

			   <div class="list-group">
				   <div class="list-group-item-full-header">
					   <h6>MI CUENTA</h6>
				   </div>
				   <!--{!!link_to_route('usuarios.edit', $title = 'Ir a mi perfil', $parameters = Auth::user()->get()->id, $attributes = ['class'=>'list-group-item list-group-item-info'])!!}-->
				   <a href="{!!URL::to('/profile')!!}" class="list-group-item list-group-item-info">Ir a mi perfil</a>
			   </div>
			   <div class="list-group">
				   <div class="list-group-item-full-header">
					   <h6>MI EMPRESA</h6>
				   </div>
				   <a href="{!!URL::to('/empresas/create')!!}" class="list-group-item list-group-item-warning">Saber más e ir a registrar mi empresa</a>
			   </div>



				<div class="list-group" id="HistorialCoins">
					<div class="list-group-item-full-header">
						<h6>RESUMEN DE GARGAS DE COINS</h6>
					</div>
				</div>				
		   </div>

				<div class="col-sm-4">


					<div class="list-group" >
						<div class="list-group-item-full-header">
							<h6>NOTIFICACIONES</h6>
						</div>
						<div class="list-group-item">
							@foreach($users as $user)
								@if ($user->sexo == 'Masculino')
									Bienvenido! {{$user->nombre}}
								@elseif ($user->sexo == 'Femenino')
									Bienvenida! {{$user->nombre}}
								@else
									Te damos la bienvenida a tu primera vez en el sitio, <a class="btn btn-primary btn-sm" href="usuarios/{{$user->id}}/edit">actualiza tus datos</a> y gana yavu coins!
								@endif
							@endforeach
						</div>
						<div class="list-group-item">
						</div>
						<a href="{{URL::to('/feeds')}}" class="list-group-item list-group-item-info">
							Ir a publicaciones
						<span class="badge">
							14
							<small>  ¡Publicaciones nuevas!</small>
						</span>
						</a>
						<a href="{{URL::to('/pops')}}" class="list-group-item list-group-item-warning">
							Ir a notificaciones
						</a>

					</div>

				</div>

		   <div class="col-sm-4"><!--style="position:fixed;z-index:1000;"-->

			   <div class="list-group" >
				   <div class="list-group-item-full-header">
					   <h6>CONFIGURACIONES</h6>
				   </div>
				   <div class="list-group-item" style="height:80px;">
					   Revisa algunas configuraciones de seguridad para ti.
				   </div>
				   <a href="#" class="list-group-item list-group-item-info">Ir a configuraciones</a>
			   </div>

			   <div class="list-group" >
				   <div class="list-group-item-full-header">
					   <h6>INFORMES</h6>
				   </div>
				   <div class="list-group-item" style="height:80px;">
					   Revisa estadisticas
				   </div>
				   <a href="{!!URL::to('/reports')!!}" class="list-group-item list-group-item-info">Ir a informes</a>
			   </div>

			   <!--
			   <div class="list-group" >
					<div class="list-group-item-full-header">
						<h6>POLÍTICAS Y SERVICIOS</h6>
					</div>						
					<div class="list-group-item" style="height:80px;">
						Entérate de nuestras politicas para comenzar una actividad en Yavu.<span class="badge">14</span>
					</div>
					<a href="#" class="list-group-item list-group-item-info">Leer políticas</a>
				</div>

				<div class="list-group" >
					<div class="list-group-item-full-header">
						<h6>AYUDAS GENERALES</h6>
					</div>
					<div class="list-group-item" style="height:80px;">
						Revisa nuestras sugerencias para una mejor experiencia en yavu.
					</div>
					<a href="#" class="list-group-item list-group-item-info">Ir a ayudas generales</a>
				</div>
			   -->

		   </div>
		</div>
	</div><!-- Fin del div id contentIn -->
</div>
@stop




