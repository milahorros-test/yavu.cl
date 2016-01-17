@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h2>Perfil</h2>
		<div class="panel panel-info">
			<div class="panel-heading">Perfil - Datos personales</div>
		  	<div class="panel-body">
			<table class="table">
				<tr>
					<th colspan="4">¡Mantenga sus datos actualizados!</th>
				</tr>	
				<tr>
					<td>Nombre</td>
					<td></td>
					<td>{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre','required'=>'required','width'=>'100%'])!!}<td>	
					<td></td>							
				</tr>
				<tr>
					<td>Apellido</td>
					<td></td>
					<td>{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese su apellido','required'=>'required'])!!}</td>	
					<td></td>							
				</tr>
				<tr>
					<td>Rut</td>
					<td></td>
					<td>{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingrese su rut','required'=>'required'])!!}</td>	
					<td></td>							
				</tr>
				<tr>
					<td>Foto de avatar</td>
					<td></td>
					<td>
						<a href="#">
							<img alt="Imagen corfo" src= "images/default-img.gif" height="140px" width="210px" />
						</a> 
					</td>
					<td></td>
				</tr>				
				<tr>
					<td>
						{!!Form::submit('Guardar', ['class'=>'btn btn-success','width'=>'100%']) !!}﻿
					</td>						
				</tr>
			</table>
		  </div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">Perfil - Datos de usuario y acceso</div>
		  	<div class="panel-body">
			<table class="table">
				<tr>
					<th colspan="4">¡Mantenga sus datos actualizados!</th>
				</tr>	
				<tr>
					<td>Email</td>
					<td></td>
					<td>{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese su email','required'=>'required'])!!}</td>	
					<td></td>							
				</tr>				
				<tr>
					<td>Nombre de usuario</td>
					<td></td>
					<td>{!!Form::text('login',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre de usuario','required'=>'required'])!!}</td>	
					<td></td>							
				</tr>				
				<tr>
					<td>Clave</td>
					<td></td>
					<td>{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese una clave'])!!}</td>	
					<td></td>							
				</tr>
				<tr>
					<td>
						{!!Form::submit('Guardar', ['class'=>'btn btn-success','width'=>'100%']) !!}﻿
					</td>						
				</tr>
			</table>
		  </div>
		</div>			
		<div class="panel panel-info">
			<div class="panel-heading">Perfil - Datos de Contacto y Ubicación</div>
		  	<div class="panel-body">
			
			<table class="table">
				<tr>
					<th colspan="4">¡Mantenga sus datos actualizados!</th>
				</tr>	
				<tr>
					<td>Teléfono de contacto</td>
					<td></td>
					<td></td>	
					<td></td>							
				</tr>				
				<tr>
					<td></td>
					<td></td>
					<td></td>	
					<td></td>							
				</tr>				
				<tr>
					<td></td>
					<td></td>
					<td></td>	
					<td></td>							
				</tr>	
				<tr>
					<td>
						{!!Form::submit('Guardar', ['class'=>'btn btn-success','width'=>'100%']) !!}﻿
					</td>						
				</tr>
			</table>
		  </div>
		</div>		


	</div><!-- Fin del div id contentIn -->
</div>
@stop