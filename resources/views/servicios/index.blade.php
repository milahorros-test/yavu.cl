@extends('layouts.frontplainservices')	
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
				<th>Aniversario Empresa</th>
				<th>Encargado</th>
				<th>Operaciones</th>
			</thead>
			@foreach($empresas as $empresa)	
			<tbody>
				<td>{{$empresa->nombre}}</td>
				<td>{{$empresa->email}}</td>
				<td>{{$empresa->ciudad}}</td>
				<td>{{$empresa->fono}}</td>
				<td>{{$empresa->fecha_creacion}}</td>
				<td>{{$empresa->nombre_encargado}}</td>
				<td>{!!link_to_route('servicios.edit', $title = 'Editar', $parameters = $empresa->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			</tbody>
			@endforeach
		</table>	
		{!!$empresas->render()!!}
	</div>
</div>
@stop