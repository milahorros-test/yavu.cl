@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Registro de cliente </h4>
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Registro de clientes</h4></div>
			<div class="panel-body">
				<table class="table">
					{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST'])!!}
					@include('usuarios.forms.fieldsUser')
					<tr>
						<td>
							Guardar
						</td>
						<td>
								{!!Form::submit('Registrar', ['class'=>'btn btn-primary btn-success'])!!}
							{!!Form::close()!!}
						</td>		
					</tr>	
				</table>
			</div>
		</div>		
	</div>
</div>
@stop