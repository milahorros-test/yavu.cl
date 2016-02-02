@extends('layouts.frontplainservices')	
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.successMessage')
		<table class="table">
			<thead>
				<th>Empresa</th>
				<th>Tipo de Servicio</th>
				<th>Ciudad</th>
				<th>Fecha</th>
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