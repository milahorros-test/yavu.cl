@extends('layouts.frontadm')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
	<h1>Registro de Admins</h1>
	</div>
	<div id="contentIn">
		@include('alerts.alertFields')
		

		{!!Form::open(['route'=>'admins.store', 'method'=>'POST'])!!}
			@include('admins.forms.fieldsAdmin')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}
		
	</div>
</div>
@stop