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
				<th>Aniversario Empresa</th>
				<th>Encargado</th>
				<th>Operaciones</th>
			</thead>
			@foreach($empresas as $empresa)	
			<tbody>
				<td>{{$empresa->NOMBRE_EMPRESA}}</td>
				<td>{{$empresa->EMAIL_EMPRESA}}</td>
				<td>{{$empresa->CIUDAD_EMPRESA}}</td>
				<td>{{$empresa->FONO_EMPRESA}}</td>
				<td>{{$empresa->FECHA_CREACION_EMPRESA}}</td>
				<td>{{$empresa->NOMBRE_ENCARGADO_EMPRESA}}</td>
				<td>{!!link_to_route('empresas.edit', $title = 'Editar', $parameters = $empresa->ID_EMPRESA, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			</tbody>
			@endforeach
		</table>	
		{!!$empresas->render()!!}
	</div>
</div>
@stop