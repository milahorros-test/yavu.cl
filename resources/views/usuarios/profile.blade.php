@extends('layouts.front')
@section('content')
<h2>Perfil</h2>
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Actualización de cliente : {{$user->nombre .' '. $user->apellido}}</h4>

		{!!Form::model($user, ['method'=>'PUT', 'route' => ['usuarios.update', $user->id] ])!!}
			@include('usuarios.forms.fieldsUser')
			{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}

		{!!Form::open(['action'=> ['UserController@destroy', $user->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger']) !!}﻿
		{!!Form::close()!!}

	</div>
</div>
@stop