@extends('layouts.frontadm')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Registro de banners</h4>

		{!!Form::open(['route'=>'banners.store', 'method'=>'POST'])!!}
			@include('banners.forms.fieldsBanner')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}
		
	</div>
</div>
@stop