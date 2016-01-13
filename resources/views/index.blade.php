@extends('layouts.front')
@section('content')
	<div class="container">
  <h2>Somos Yavu.cl!</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th><h4>Landing TEXT</h4></th>
        <th><h4>Registrate Ya!</h4>	</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <!-- Formulario de registro -->
      <i class="form-control-feedback glyphicon glyphicon-user"></i>
        <td> -> Regístrate gratis!<br>
        <i class="form-control-feedback glyphicon glyphicon-user"></i>
        -> Acumula puntos en cada compra!<br>
        -> Participa por premios todos los meses.<br></td>
        <td>@include('alerts.alertFields')
									
			{!!Form::open(['route'=>'admins.store', 'method'=>'POST'])!!}
			@include('admins.forms.fieldsLanding')
			{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
			{!!Form::close()!!}</td>
      </tr>
    </tbody>
  </table>
</div>
@stop