@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		<h4>Registro de Empresas</h4>
		<div class="row">
			{!!Form::open(['route'=>'empresas.store', 'method'=>'POST'])!!}
			@include('empresas.forms.fieldsEmpresa')
			<div class="form-group has-feedback has-feedback-left col-sm-6">	
				{!!Form::label('Registrar')!!}		
				{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success col-sm-12'])!!}
				{!!Form::close()!!}			
			</div>
		</div>
	</div>
</div>
@stop