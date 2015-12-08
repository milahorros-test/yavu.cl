@extends('layouts.front')
@section('content')
{!!Form::open(['route'=>'usuarios.store','method'=>'POST'])!!}
<div class="jumbotron">
		<div id="contentIn">
			<h4>Registro de clientes</h4>
			<div class="form-group">
				{!!Form::label('Nombre:')!!}
				{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre','required'=>'required'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('Apellido:')!!}
				{!!Form::text('secondName',null,['class'=>'form-control','placeholder'=>'Ingrese su apellido','required'=>'required'])!!}
			</div>		
			<div class="form-group">
				{!!Form::label('Rut:')!!}
				{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingrese su rut','required'=>'required'])!!}			
			</div>
			<div class="form-group">
				{!!Form::label('Email:')!!}
				{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email','required'=>'required'])!!}			
			</div>
			<div class="form-group">
				{!!Form::label('Nombre de usuario:')!!}
				{!!Form::text('nameUser',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre de usuario','required'=>'required'])!!}			
			</div>				
			<div class="form-group">
				{!!Form::label('Clave:')!!}
				{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese una clave','required'=>'required'])!!}			
			</div>
			<div class="form-group">
				{!!Form::submit('Registrar',['class'=>'btn btn-primary btn-success'])!!}
			</div>
		</div>
</div>
{!!Form::close()!!}
@stop