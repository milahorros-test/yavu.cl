{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/BuscarUsuario.js')!!}
@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h2>Reportes de información</h2>		
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Mantenedor de usuarios</h4></div>
			<div class="panel-body">

			<!--
			<form class="">
			  <div class="form-group">
				{!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'buscar...','id'=>'usuario'])!!}
			  </div>
			  <a href="#!" class="btn btn-primary btn-sm" id="BuscarUsuario">Buscar</a>
			</form>
			-->
				

				<table id="UserList" class="table">
					<thead>
						<th>Identificador</th>
						<th>Usuario</th>
						<th>Motivo</th>
						<th>Cantidad</th>
						<th>Fecha</th>
						<th>Operaciones</th>
					</thead>

					@foreach($historialcoins as $hcoin)	

					<tbody>
						<td>{{$hcoin->user_id}}</td>
						<td>{{$hcoin->nombre}}</td>
						<td>{{$hcoin->motivo}}</td>
						<td>{{$hcoin->cantidad}}</td>
						<td>{{$hcoin->created_at}}</td>
						<td>{!!link_to_route('coins.edit', $title = 'Editar', $parameters = $hcoin->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
					</tbody>

					@endforeach
					
				</table>	

			</div>
		</div>
		{!!$hcoin->render()!!}
	</div>
</div>
@stop