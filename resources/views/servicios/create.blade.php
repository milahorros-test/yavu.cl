@extends('layouts.frontplain')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Registro de Servicios</h4>
		{!!Form::open(['route'=>'servicios.store', 'method'=>'POST'])!!}
			@include('servicios.forms.fieldsServicios')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}
	</div>
</div>
@stop