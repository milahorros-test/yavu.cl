@extends('layouts.frontadm')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Actualización de administrador : {{$sorteo->estado_sorteo}}</h4>
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Mantenedor de sorteos</h4></div>
			<div class="panel-body">
				<table class="table">
					{!!Form::model($sorteo, ['method'=>'PUT', 'route' => ['sorteo.update', $sorteo->id] ])!!}
						@include('admins.forms.fieldsAdmin')
						<tr>
							<td>
								Guardar o Eliminar
							</td>
							<td>
								{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success'])!!}
								{!!Form::close()!!}	
							</td>
							<td>
								{!!Form::open(['action'=> ['SorteoController@destroy', $sorteo->id], 'method'=>'DELETE'])!!}
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