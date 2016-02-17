{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/BuscarUsuario.js')!!}
@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h2>Panel de administración</h2>		
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Mantenedor de usuarios</h4></div>
			<div class="panel-body">

			<form class="">
			  <div class="form-group">
				{!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'buscar...','id'=>'usuario'])!!}
			  </div>
			  <a href="#!" class="btn btn-primary btn-sm" id="BuscarUsuario">Buscar</a>
			</form>

				

				<table id="UserList" class="table table-hover">
					<thead>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Ciudad</th>
						<th>Fono</th>
						<th>Cumplea&ntilde;os</th>
						<th>Sexo</th>
						<th>Operaciones</th>
					</thead>
					@foreach($historialcoins as $hcoin)	
					<tbody>
						<td>{{$hcoin->nombre}}</td>
						<td>{{$hcoin->email}}</td>
						<td>{{$hcoin->ciudad}}</td>
						<td>{{$hcoin->fono}}</td>
						<td>{{$hcoin->fecha_nacimiento}}</td>
						<td>{{$hcoin->sexo}}</td>
						<td>{!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $hcoin->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
					</tbody>

					@endforeach
				</table>	
			</div>
		</div>
		{!!$users->render()!!}
	</div>
</div>
@stop