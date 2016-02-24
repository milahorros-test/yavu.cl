 @extends('layouts.frontadm')	
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h2>Bienvenido Yavu Admin!</h2>		
		<div class="panel panel-default">
			<div class="panel-heading"></div>
			<div class="panel-body">
				<table class="table">
					<thead>
					<h4>El Panel de administración es una interfaz intuitiva para configurar y administrar las empresas, servicios y estados de pagos de estas mismas. Esto es su base para todo lo relacionado con la plataforma y poder administrar de manera correcta Yavu.cl.</h4>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Operaciones</th>
					</thead>
					@foreach($admins as $admin)	
					<tbody>
						<td>{{$admin->nombre}}</td>
						<td>{{$admin->email}}</td>
						<td>{!!link_to_route('admins.edit', $title = 'Editar', $parameters = $admin->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
					</tbody>
					@endforeach
				</table>	
				{!!$admins->render()!!}	
			</div>
	    </div>  	
	</div>
</div>


@stop

