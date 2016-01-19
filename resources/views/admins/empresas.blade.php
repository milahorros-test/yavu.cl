@extends('layouts.frontadm')	
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.successMessage')
		<h2>Panel de administración de Empresas</h2>		
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operaciones</th>
			</thead>
			@foreach($admins as $admin)	
			<tbody>
				<td>{{$admin->nombre}}</td>
				<td>{{$admin->email}}</td>
				<td>{!!link_to_route('admins.edit', $title = 'Editar', $parameters = $admin->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			</tbody>
			@endforeach
		</table>	
		{!!$admins->render()!!}		
	</div>
</div>
@stop