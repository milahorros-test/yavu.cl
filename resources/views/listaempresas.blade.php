{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/BuscarEmpresa.js')!!}
@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h2>Panel de administración</h2>		
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Mantenedor de empresas</h4></div>
			<div class="panel-body">
				<form class="">
					<div class="form-group">
						{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'buscar...','id'=>'empresa'])!!}
					</div>
					<a href="#!" class="btn btn-primary btn-sm" id="BuscarEmpresa">Buscar</a>
				</form>
				<table id="EmpresaList" class="table table-hover">
					<thead>
						<th>Nombre</th>

					</thead>
					@foreach($empresas as $empresa)	
					<tbody>
						<td>{{$empresa->nombre}}</td>

						
					</tbody>
					@endforeach
				</table>	
			</div>
		</div>
		{!!$empresas->render()!!}
	</div>
</div>
@stop