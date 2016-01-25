@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		<h4>Actualización de Empresa : {{$empresa->nombre}}</h4>
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Mantenedor de empresas</h4></div>
			<div class="panel-body">
				<table class="table">
					{!!Form::model($empresa, ['method'=>'PUT', 'route' => ['empresas.update', $empresa->id] ])!!}
						@include('empresas.forms.fieldsEmpresa')
					<tr>
						<td>
							Guardar o Eliminar
						</td>
						<td>
							{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success'])!!}
							{!!Form::close()!!}
						</td>
						<td>
							{!!Form::open(['action'=> ['EmpresaController@destroy', $empresa->id], 'method'=>'DELETE'])!!}
								{!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger'])!!}
							{!!Form::close()!!}							
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
@stop