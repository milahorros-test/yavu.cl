@extends('layouts.frontadm')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		<h4>Actualización de Empresa : {{$empresa->nombre}}</h4>
		<div class="row">
			{!!Form::model($empresa, ['method'=>'PUT', 'route' => ['empresas.update', $empresa->id] ])!!}
			@include('empresas.forms.fieldsEmpresa')
			<div class="col-sm-4" style="float:right;">
				<div class="list-group">
					<div class="list-group-item">				
						<div class="form-group has-feedback has-feedback-left">
							{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success col-sm-12'])!!}
							{!!Form::close()!!}
						</div>
						<div class="form-group has-feedback has-feedback-left">
							{!!Form::open(['action'=> ['EmpresaController@destroy', $empresa->id], 'method'=>'DELETE'])!!}
								{!!Form::submit('Eliminar', ['class'=>'btn btn-primary btn-danger col-sm-12'])!!}
							{!!Form::close()!!}		
						</div>
						@include('alerts.alertFields')
						@include('alerts.errorsMessage')
						@include('alerts.successMessage')
						@include('alerts.warningMessage')								
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
@stop
<!--,'data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Tooltip'-->
