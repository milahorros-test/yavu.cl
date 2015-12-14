@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.successMessage')
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
				<td>{{$user->NOMBRE_USUARIO}}</td>
				<td>{{$user->EMAIL_USUARIO}}</td>
				<td>{{$user->CIUDAD_USUARIO}}</td>
				<td>{{$user->FONO_USUARIO}}</td>
				<td>{{$user->FECHA_NACIMIENTO_USUARIO}}</td>
				<td>{{$user->SEXO_USUARIO}}</td>
				<td>{!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $user->ID_USUARIO, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			</tbody>
			@endforeach
		</table>	
		{!!$users->render()!!}
	</div>
</div>
@stop