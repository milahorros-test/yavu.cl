 @extends('layouts.frontadm')	
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
		<h2>Binvenido Yavu Admin!</h2>		
		<div class="panel panel-default">
			<div class="panel-heading"></div>
			<div class="panel-body">
				<table class="table">
					<thead>
					<h3>El Panel de administración es una interfaz intuitiva para configurar y administrar sus empresas, servicios y estados de pagos. Esto es su base para cualquier cosa o todo lo relacionado con la plataforma Yavu.cl.</h3>
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

