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
				

				<table id="UserList" class="table table-hover">
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
						<td id="date{{$hcoin->id}}" title="{{$hcoin->created_at}}" class="timeago" style="font-size: 0.85em;"></td>
						<td>{!!link_to_route('coins.edit', $title = 'Editar', $parameters = $hcoin->id, $attributes = ['class'=>'', 'style' => 'color:#000;'])!!}</td>
					</tbody>

					@endforeach
					
				</table>	

			</div>
		</div>
	</div>
</div>
@stop
<script>
	var Control = true;
	setInterval(function(){
		if(Control){
			var a = $(".timeago");
			for(var i = 0; i < a.length ; i++){
				var elemento = document.getElementById( a[i].id );
				console.log(elemento);
				$('#'+a[i].id).text( humanTiming( elemento.title ) );
			}		
			Control = false;				
		}
	},1000);

	function humanTiming(time)
	{
		var now = new Date();
		var nowTime = now.getTime()
		nowTime = nowTime - Date.parse(time);
	    var tokens = [
	    	[1, 'segundo'],
	    	[60, 'minuto'],
	    	[3600, 'hora'],
	    	[86400, 'día'],
	    	[604800, 'semana'],
	    	[2592000, 'mes'],
	    	[31536000, 'año']
	   ];
	   //console.log(JSON.stringify(tokens[0][1])); //unidad
	   //console.log(JSON.stringify(tokens[0][0])); //cantidad
	   	var numberOfUnits = 0;
		for(var i = 0, len = tokens.length; i < len; i++){
			if (nowTime < tokens[i][0]) {	

				if (tokens[i][1] === "día"){
					numberOfUnits = nowTime/(tokens[i-1][0])*10;
				}
				if(Math.floor(numberOfUnits) >= 7 && Math.floor(numberOfUnits) < 30){

				}else if(Math.floor(numberOfUnits) >= 7 && Math.floor(numberOfUnits) < 30){
					return "hace "+Math.floor(numberOfUnits/7)+" "+tokens[i+1][1]+((Math.floor(numberOfUnits/7)>1)?'s':'');

				}else if(Math.floor(numberOfUnits) >= 1 && Math.floor(numberOfUnits) < 7){
					return "hace "+Math.floor(numberOfUnits)+" "+tokens[i][1]+((Math.floor(numberOfUnits)>1)?'s':'');						

				}else if(Math.floor(numberOfUnits) < 1){

					if (numberOfUnits > 0.0416 ){
						return "hace "+Math.floor(24*numberOfUnits)+" "+tokens[i-1][1]+((Math.floor(24*numberOfUnits)>1)?'s':'');				

					}else if(numberOfUnits < 0.0416 && numberOfUnits > 0.000693333 ){
						numberOfUnits = Math.floor(((numberOfUnits*100)/4.)*60);
						return "hace "+numberOfUnits+" "+tokens[i-2][1]+((numberOfUnits>1)?'s':'');

					}else if(numberOfUnits < 0.000293333 ){
						return 'hace pocos minutos';

					}
				}	
			}else{				
				nowTime = Math.floor(nowTime/tokens[i][0]);				
			}
		}	    	
	}	
</script>