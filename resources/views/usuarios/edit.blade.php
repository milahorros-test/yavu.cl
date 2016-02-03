@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')		
		<h4>Actualización de usuario : {{$user->nombre .' '. $user->apellido}}</h4>
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Mantenedor de usuarios</h4></div>
			<div class="panel-body">

				{!!Form::model($user, ['method'=>'PUT', 'route' => ['usuarios.update', $user->id] ])!!}
				@include('usuarios.forms.fieldsUser')

				<div class="form-group has-feedback has-feedback-left col-sm-3">
					{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success col-sm-12'])!!}
					{!!Form::close()!!}				
				</div>
				<div class="form-group has-feedback has-feedback-left col-sm-3">
					{!!Form::open(['action'=> ['UserController@destroy', $user->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger col-sm-12'])!!}﻿
					{!!Form::close()!!}								
				</div>

			</div>
		</div>	
	</div>
</div>
@stop