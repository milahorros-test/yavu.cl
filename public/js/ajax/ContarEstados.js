$(document).ready(function(){
	ContarEstados();

	function ContarEstados(){
		var EstadosNuevos = $("#EstadosNuevos"); 
		var route = "http://localhost:8000/contarestados";
		var user_id = $("#user_id");
		var Contador = 0;
		$.get(route, function(res){
			$(res).each(function(key,value){
				Contador += 1;
				if (Contador === 4){
					Global_idUltimaPublicacion = value.id;
					EstadosNuevos.append(Contador);
					console.log(Contador);
				}
			});
		});						
	}
});