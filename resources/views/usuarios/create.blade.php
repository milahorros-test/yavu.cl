@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Registro de clientes</h4></div>
			<div class="panel-body">
				{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
					@include('usuarios.forms.fieldsUser')
					{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
				{!!Form::close()!!}
			</div>
		</div>		
	</div>
</div>
@stop