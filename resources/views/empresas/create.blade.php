@extends('layouts.front')
@section('content')
{!!Form::open(['route'=>'empresas.store','method'=>'POST'])!!}
<div class="jumbotron">
	<div id="contentIn">
		<h4>Registro de empresas</h4>
		<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Email:')!!}
			{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu email'])!!}			
		</div>
		<div class="form-group">
			{!!Form::label('Clave:')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa una clave'])!!}			
		</div>
		<div class="form-group">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		</div>
	</div>
</div>
{!!Form::close()!!}
@stop