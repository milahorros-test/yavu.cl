	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	$("#BuscarEmpresa").click(function(e){
		BuscarEmpresa();
		e.preventDefault();
	});
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	/*$("#usuario").on('keypress', function(e) { 		
	    if(e.which == 13) {
	        BuscarUsuario();
	    }
	});	*/
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/
	function BuscarEmpresa(){
		console.log("click");
		var NombreEmpresa = $("#empresa").val();
		var route = "http://localhost:8000/buscarempresa/"+NombreEmpresa+"";
		$("#EmpresaList").text("");
		$.get(route, function(res){
			$("#EmpresaList").append(
					"<thead>"
						+"<th>Nombre</th>"

				);
			$(res).each(function(key,value){
				$("#EmpresaList").append(
						"<tbody><td>"+value.nombre+"</td>"

						+"<td> <a href='empresas/" + value.id + "/edit' class='btn btn-primary'>Editar</a> </td>");								 

			});
		});						
	}	
	/*FUNCIONES Y PROCEDIMIENTOS*/
});