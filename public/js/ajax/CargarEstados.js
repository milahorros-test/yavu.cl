$(document).ready(function(){	
	//$("#CargarEstados").click(function(){
		console.log("click");
		var EstadosUsuario = $("#Estados"); 
		var route = "http://localhost:8000/estadosusuario";
		var user_id = $("#user_id");
		$.get(route, function(res){
			$(res).each(function(key,value){
				EstadosUsuario.append(
					"<div class='list-group-item'>"
						+value.nombre+" Publicó a las "+ value.created_at +" : <br>"

						+value.status+"<br>"

					+"</div>");
			});
		});
		jQuery("time.timeago").timeago();
	//});
});