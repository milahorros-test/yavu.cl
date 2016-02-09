$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	$("#BuscarUsuario").click(function(){
		BuscarUsuario();
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
	function BuscarUsuario(){
		console.log("click");
		var NombreUsuario = $("#usuario").val();
		var route = "http://localhost:8000/buscarusuario/"+NombreUsuario+"";
		$("#UserList").text("");
		$.get(route, function(res){
			$("#UserList").append(
					"<thead>"
						+"<th>Nombre</th>"
						+"<th>Correo</th>"
						+"<th>Ciudad</th>"
						+"<th>Fono</th>"
						+"<th>Cumplea&ntilde;os</th>"
						+"<th>Sexo</th>"
						+"<th>Operaciones</th>"
					+"</thead>"
				);
			$(res).each(function(key,value){
				$("#UserList").append(
						"<tbody><td>"+value.nombre+"</td>"
						+"<td>"+value.email+"</td>"
						+"<td>"+value.ciudad+"</td>"
						+"<td>"+value.fono+"</td>"
						+"<td>"+value.fecha_nacimiento+"</td>"
						+"<td>"+value.sexo+"</td>"
						+"<td> {!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!} </td>");								 
			});
		});						
	}	
	/*FUNCIONES Y PROCEDIMIENTOS*/

		
});