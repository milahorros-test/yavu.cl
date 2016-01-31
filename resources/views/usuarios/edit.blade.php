@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')		
		<h4>Actualización de cliente : {{$user->nombre .' '. $user->apellido}}</h4>
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Mantenedor de usuarios</h4></div>
			<div class="panel-body">
				<table class="table">
					{!!Form::model($user, ['method'=>'PUT', 'route' => ['usuarios.update', $user->id] ])!!}
					@include('usuarios.forms.fieldsUser')
					<tr>
						<td>
							Guardar o Eliminar
						</td>
						<td>
							{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success'])!!}
							{!!Form::close()!!}					
						</td>
						<td>
							{!!Form::open(['action'=> ['UserController@destroy', $user->id], 'method'=>'DELETE'])!!}
								{!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger']) !!}﻿
							{!!Form::close()!!}			
						</td>			
					</tr>	
				</table>
			</div>
		</div>	
	</div>
</div>
@stop