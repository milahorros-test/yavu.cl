@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		<h4>Actualización de Empresa : {{$empresa->NOMBRE_EMPRESA}}</h4>
		{!!Form::model($empresa, ['method'=>'PATCH', 'action' => ['EmpresaController@update', $empresa->ID_EMPRESA] ])!!}
			@include('empresas.forms.fieldsEmpresa')
			{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}
	</div>
</div>
@stop