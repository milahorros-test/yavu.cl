@extends('layouts.front')
@section('content')
<div class="jumbotron">
	<div id="contentMiddle">
		@include('alerts.alertFields')
		<h4>Registro de Coins</h4>
		<div class="row">
			{!!Form::open(['route'=>'coins.store', 'method'=>'POST'])!!}
			@include('coins.forms.fieldsCoins')

			</div><!--Este fin del div cierra el div que se abre en fieldsEmpresa-->			
		</div>
	</div>
</div>
@stop