@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		<h4>Registro de empresas</h4>
		{!!Form::open(['route'=>'empresas.store', 'method'=>'POST'])!!}
			@include('empresas.forms.fieldsEmpresa')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}
	</div>
</div>
@stop