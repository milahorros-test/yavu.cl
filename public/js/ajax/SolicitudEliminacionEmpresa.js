$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	$("#SolicitudEliminacion").click(function(){
		console.log(this.value);
	});		
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/
	function SolicitarEliminacion(){
		var empresa_id = $("#SolicitudEliminacion").val();
		var route = "http//localhost:8000/solicitareliminacionempresa/"+empresa_id;
		$.get(route, function(res){
			$(res).each(function(key,value){

			});
			//console.log(Contador);
		});			
	}
	/*FUNCIONES Y PROCEDIMIENTOS*/

	
});