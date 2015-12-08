@extends('layouts.front')
<?php $message=Session::get('message') ?>
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@if($message == 'store')
			<div class="alert alert-success alert-dismissible" role="alert">
	  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  			Empresa creada exitosamente
			</div>
		@endif
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
				<td></td>
			</tbody>
			@endforeach
		</table>	
	</div>
</div>
@stop