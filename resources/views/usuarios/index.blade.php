@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h2>Panel de administración</h2>		
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Mantenedor de usuarios</h4></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Ciudad</th>
						<th>Fono</th>
						<th>Cumplea&ntilde;os</th>
						<th>Sexo</th>
						<th>Operaciones</th>
					</thead>
					@foreach($users as $user)	
					<tbody>
						<td>{{$user->nombre}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->ciudad}}</td>
						<td>{{$user->fono}}</td>
						<td>{{$user->fecha_nacimiento}}</td>
						<td>{{$user->sexo}}</td>
						<td>{!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
					</tbody>
					@endforeach
				</table>	
			</div>
		</div>
		{!!$users->render()!!}
	</div>
</div>
@stop