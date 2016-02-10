$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	ContarCoins();
	InfoEmpresas();
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
					$("#CantidadCoins").append(value.coins);	
				}
					//$("#CantidadCoins").html("<p>0</p>");	
			});
		});						
	}
	function InfoEmpresas(){
		var user_id = $("#user_id").val();
		var route = "http://localhost:8000/infoempresas/"+user_id;
		console.log(user_id);
		$.get(route, function(res){
			$("#EstadoEmpresa").value = "";
			$(res).each(function(key,value){
				if(value.estado === "Pendiente"){
					//$("#EstadoEmpresa").removeClass("label-success");
					//$("#EstadoEmpresa").addClass("label-warning");
					$("#EstadoEmpresa").append(
						'<span style="" class="label label-warning">'
							+'<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>'
							+value.nombre+": "+value.estado
						+"</span>"					
					);
				}else if(value.estado === "Activo"){
					//$("#EstadoEmpresa").removeClass("label-warning");
					//$("#EstadoEmpresa").addClass("label-success");
					$("#EstadoEmpresa").append(
						'<span style="" class="label label-success">'
							+'<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>'
							+value.nombre+": <a href='empresa/"+value.nombre+"'>"+value.estado+"</a>"							
						+"</span>"					
					);					
				}					
	
			});
		});	
	}

	/*FUNCIONES Y PROCEDIMIENTOS*/

	
});