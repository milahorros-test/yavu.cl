@extends('layouts.frontplain')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Registro de Empresas</h4>
		{!!Form::open(['route'=>'empresas.store', 'method'=>'POST'])!!}
			@include('empresas.forms.fieldsEmpresa')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}
	</div>
</div>
@stop