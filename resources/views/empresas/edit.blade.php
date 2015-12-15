@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Actualización de Empresa : {{$empresa->NOMBRE_EMPRESA}}</h4>

		{!!Form::model($empresa, ['method'=>'PUT', 'route' => ['empresas.update', $empresa->ID_EMPRESA] ])!!}
			@include('empresas.forms.fieldsEmpresa')
			{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}

		{!!Form::open(['action'=> ['EmpresaController@destroy', $empresa->ID_EMPRESA], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger'])!!}
		{!!Form::close()!!}
		
	</div>
</div>
@stop