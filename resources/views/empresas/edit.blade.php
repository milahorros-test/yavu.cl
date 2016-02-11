{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/ajax/SolicitudEliminacionEmpresa.js')!!}
@extends('layouts.frontadm')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		<h4>Actualización de Empresa : {{$empresa->nombre}}</h4>
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')			
		<div class="row">
			{!!Form::model($empresa, ['method'=>'PUT', 'route' => ['empresas.update', $empresa->id] ])!!}
			@include('empresas.forms.fieldsEmpresa')
				<div class="list-group">
					<div class="list-group-item">				
						<div class="form-group has-feedback has-feedback-left">
							{!!Form::submit('Guardar', ['class'=>'btn btn-primary btn-success', 'style'=>'width:100%;'])!!}
							{!!Form::close()!!}
						</div>
					</div>

					<div class="list-group-item">		
						<div class="form-group has-feedback has-feedback-left">
							<!--  Reemplaza->{!!Form::open(['action'=> ['EmpresaController@destroy', $empresa->id], 'method'=>'DELETE'])!!}
								{!!Form::submit('Solicitar eliminación', ['class'=>'btn btn-primary btn-danger', 'style'=>'width:100%;'])!!}
							{!!Form::close()!!}-->
							{!!Form::button('Solicitar eliminación', ['class'=>'btn btn-primary btn-danger', 'style'=>'width:100%;', 'id' => 'SolicitudEliminacion', 'value'=>$empresa->id])!!}
						</div>
					</div>
					
					<div class="list-group-item">
						<h6>Información completa al:</h6>
						<div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
						    99%
						  </div>
						</div>							
					</div>						
				</div>				
			</div><!--Este fin del div cierra el div que se abre en fieldsEmpresa-->		
		</div>
	</div>
</div>
@stop
<!--,'data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Tooltip'-->
