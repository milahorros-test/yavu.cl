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
				<div class="form-group">

  				@if(Auth::admin()->check())

				 {!!Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre de empresa','id'=>'empresa'])!!}

				@elseif(Auth::user()->check() || !Auth::user()->check())

				 {!!Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre de empresa','id'=>'empresathumb'])!!}

				 @endif

				</div>
				@if(Auth::admin()->check())
					<table class="table table-hover" id="EmpresaList">

						<thead>
							<th>Nombre</th>
							<th>Correo</th>
							<th>ciudad</th>
							<th>Fono</th>
							<th>Aniversario Empresa</th>
							<th>Encargado</th>
							<th>Operaciones</th>
						</thead>

						@foreach($empresas as $empresa)	
							<tbody>
								<td>{{$empresa->nombre}}</td>
								<td>{{$empresa->email}}</td>
								<td>{{$empresa->ciudad}}</td>
								<td>{{$empresa->fono}}</td>
								<td>{{$empresa->fecha_creacion}}</td>
								<td>{{$empresa->nombre_encargado}}</td>
								<td>{!!link_to_route('empresas.edit', $title = 'Editar', $parameters = $empresa->id, $attributes = ['class'=>'btn btn-primary'])!!}
								</td>
							</tbody>
						@endforeach
					</table>	
					{!!$empresas->render()!!}
						
				@elseif(Auth::user()->check() || !Auth::user()->check())

					<div id="EmpresaListThumb">

					@foreach($empresas as $empresa)	

					  <div class="container" id="tourpackages-carousel">
					      <div class="row">				        
					        <div class="col-md-4">
					          <div class="thumbnail">
					            <img src="{!!URL::to('images/empresa.png')!!}" alt="">
					              <div class="caption">
					                <h4>{{$empresa->nombre}}</h4>
					            </div>
					            <td>{{$empresa->ciudad}}</td>
								<td>{{$empresa->fono}}</td>
					          </div>
					        </div>
						</div>
					</div>

					@endforeach

					</div>

					{!!$empresas->render()!!}
				@endif

				
			</div>
		</div>
	</div>
</div>
@stop