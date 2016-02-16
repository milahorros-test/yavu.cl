@extends('layouts.front')	
@section('content')
<div class="jumbotron">
	<div id="contentIn">
		@include('alerts.alertFields')
		@include('alerts.errorsMessage')
		@include('alerts.successMessage')
		@include('alerts.warningMessage')
			
		<div class="panel panel-default">
			<div class="panel-heading"><h4>Empresas Asociadas!</h4></div>
			<div class="panel-body">
				<table class="table">

					
					{!!Form::open(['route' => 'empresas.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search' ])!!}
  						<div class="form-group">
  								
   						 {!!Form::text('nombre',null,['class' => 'form-control', 'placeholder' => 'Nombre de empresa',])!!}
  						</div>
 						 <button type="submit" class="btn btn-default">Buscar</button>
				

				@foreach($empresas as $empresa)	

				  <div class="container" id="tourpackages-carousel">
				      <div class="row">				        
				        <div class="col-md-6">
				          <div class="thumbnail">
				            <img src="http://placehold.it/500x300" alt="">
				              <div class="caption">
				                <h4>{{$empresa->nombre}}</h4>
				            </div>
				            <p>texto</p>
				          </div>
				        </div>

				@endforeach
				</table>	
			</div>
		</div>	
		{!!$empresas->render()!!}
	</div>
</div>
@stop