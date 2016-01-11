@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Actualización de administrador : {{$admin->nombre .' '. $admin->apellido}}</h4>

		{!!Form::model($admin, ['method'=>'PUT', 'route' => ['admins.update', $admin->id] ])!!}
			@include('admins.forms.fieldsAdmin')
			{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success'])!!}
		{!!Form::close()!!}

		{!!Form::open(['action'=> ['AdminController@destroy', $admin->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger']) !!}﻿
		{!!Form::close()!!}
		
	</div>
</div>
@stop