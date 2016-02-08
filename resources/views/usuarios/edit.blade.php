@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		<h4>Actualización de usuario : {{$user->nombre .' '. $user->apellido}}</h4>
		<div class="row">
			{!!Form::model($user, ['method'=>'PUT', 'route' => ['usuarios.update', $user->id] ])!!}
			@include('usuarios.forms.fieldsUser')
			<div class="col-sm-4" style="float:right;">
				<div class="list-group">
					<div class="list-group-item">
						<div class="form-group has-feedback has-feedback-left">
							{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success col-sm-12', 'id'=>'guardar'])!!}
							{!!Form::close()!!}				
						</div>
						<div class="form-group has-feedback has-feedback-left">
							{!!Form::open(['action'=> ['UserController@destroy', $user->id], 'method'=>'DELETE'])!!}
								{!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger col-sm-12', 'id'=>'eliminar'])!!}﻿
							{!!Form::close()!!}								
						</div>	
						@include('alerts.alertFields')
						@include('alerts.errorsMessage')
						@include('alerts.successMessage')
						@include('alerts.warningMessage')	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop