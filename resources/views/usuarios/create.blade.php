@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Registro de clientes</h4>

		{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
			@include('usuarios.forms.fieldsUser')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}
		
	</div>
</div>
@stop