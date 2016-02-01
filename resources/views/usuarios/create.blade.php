@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Registro de cliente </h4>
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Registro de clientes</h4></div>
			<div class="panel-body">
				{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
				@include('usuarios.forms.fieldsUser')
				<div class="form-group has-feedback has-feedback-left col-sm-6">							
					{!!Form::label('Registrar')!!}						
					{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success col-sm-12'])!!}
					{!!Form::close()!!}
				</div>	
			</div>
		</div>		
	</div>
</div>
@stop