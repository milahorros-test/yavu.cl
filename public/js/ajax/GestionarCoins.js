$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	ContarCoins();
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
				$("#CantidadCoins").append(value.coins);
			});
		});						
	}	
	/*FUNCIONES Y PROCEDIMIENTOS*/

	
});