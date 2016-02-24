@extends('layouts.frontadm')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Registro de administradores</h4>

		{!!Form::open(['route'=>'admins.store', 'method'=>'POST'])!!}
			@include('admins.forms.fieldsAdmin')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}
		
	</div>
</div>
@stop