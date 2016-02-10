$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	var formatNumber = {
	 separador: ".", // separador para los miles
	 sepDecimal: ',', // separador para los decimales
	 formatear:function (num){
	  num +='';
	  var splitStr = num.split('.');
	  var splitLeft = splitStr[0];
	  var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
	  var regx = /(\d+)(\d{3})/;
	  while (regx.test(splitLeft)) {
	  splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
	  }
	  return this.simbol + splitLeft  +splitRight;
	 },
	 new:function(num, simbol){
	  this.simbol = simbol ||'';
	  return this.formatear(num);
	 }
	}	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
		HistorialCoins();
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/
	function ContarCoins(){
		var CargarEstados = $("#CargarEstados"); 
		var route = "http://localhost:8000/contarcoins";
		var user_id = $("#user_id");
		$.get(route, function(res){
			$("#CantidadCoins").value = "";
			$(res).each(function(key,value){
				console.log(value.coins);
				if(parseInt(value.coins)>0){
					$("#CantidadCoins").append(formatNumber.new(value.coins, "$ "));	
				}
					//$("#CantidadCoins").html("<p>0</p>");	
			});
		});						
	}

	function HistorialCoins(){
		var route = "http://localhost:8000/historialcoins";
		var TotalCoins = 0;
		var Contador = 0;
		$.get(route, function(res){
			$(res).each(function(key,value){
				Contador += 1;
				TotalCoins += parseInt(value.cantidad);
				$("#HistorialCoins").append(
					'<div class="list-group-item">'
						+'<small>'
						+'<div style="float:right;"><strong>Motivo</strong> '+value.motivo+'</div>'						
						+'<div><strong>Hace</strong> '+value.created_at+'</div>'
						+'<div><strong>Cantidad</strong> '+formatNumber.new(value.cantidad,"$ ")+'</div>'
						+'</small>'
					+'</div>'						
				);
			});
			$("#HistorialCoins").append(
				'<a href="#HistorialCoins"><div class="list-group-item list-group-item-info" style="text-align:right;">'
					+'<div"><strong>Total Histórico </strong><small>(Últimos '+Contador+' registros)</small> <div class="text-success">'+formatNumber.new(TotalCoins, "$ ")+'</div></div>'				
				+'</div></a>'				
			);			
		});			
	}

	/*FUNCIONES Y PROCEDIMIENTOS*/

	
});