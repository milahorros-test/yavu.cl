@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h4>Perfil</h4>
		<div class="panel panel-info">
			<div class="panel-heading">Datos personales</div>
		  	<div class="panel-body">
			
			<table class="table">
				<tr>
					<th colspan="4">¡Mantenga sus datos actualizados!</th>
				</tr>	
				<tr>
					<td>
						Nombre
					</td>
					<td>

					</td>
					<td>
						{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre','required'=>'required','width'=>'100%'])!!}
					</td>	
					<td>
						
					</td>							
				</tr>
				<tr>
					<td>
						Apellido
					</td>
					<td>
						
					</td>
					<td>
						{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese su apellido','required'=>'required'])!!}
					</td>	
					<td>
						
					</td>							
				</tr>
				<tr>
					<td>
						Rut
					</td>
					<td>
						
					</td>
					<td>
						{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingrese su rut','required'=>'required'])!!}	
					</td>	
					<td>
						
					</td>							
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>
						
					</td>
					<td>
						{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email','required'=>'required'])!!}			
					</td>	
					<td>
						
					</td>							
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>	
					<td>
						
					</td>							
				</tr>				
				<tr>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>	
					<td>
						
					</td>							
				</tr>
				<tr>
					<td>
						{!!Form::submit('Guardar', ['class'=>'btn btn-success','width'=>'100%']) !!}﻿
					</td>						
				</tr>
			</table>
		  </div>
		</div>
			

	</div>
</div>
@stop