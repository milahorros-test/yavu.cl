$(document).ready(function(){	
		var Global_idUltimaPublicacion;

	//$("#CargarEstados").click(function(){
		console.log("click");
		//CargarEstados();
		ContarEstados();

		function CargarEstados(){
			var EstadosUsuario = $("#Estados"); 
			var route = "http://localhost:8000/estadosusuario";
			var user_id = $("#user_id");
			var Contador = 0;
			$.get(route, function(res){
				$(res).each(function(key,value){
					var TimeAgo = value.created_at;
					Global_idUltimaPublicacion = value.id;
					EstadosUsuario.append(
						"<div class='list-group'>"
							+"<div class='list-group-item'>"												  	
								  	+"<h4><a href='/profile' style='color:#3C5B28;'>"
								  		+"<img class='media-object' src='http://localhost:8000/images/user.png' data-holder-rendered='true' style='width: 32px; height: 32px;'/>"
										+value.nombre+" "+value.apellido+" Idp:("+Global_idUltimaPublicacion+")"
									+"</a></h4>"
									+"<small>"
										+"Publicó <abbr class=\'timeago\' title=\'"+TimeAgo+"\'>"+TimeAgo+"</abbr>"
									+"</small><hr>"		
									+"<p>"+value.status+"</p>"
							+"</div>"
							+"<div class='list-group-item panel-footer'>"
							+"<span class='glyphicon glyphicon-thumbs-up'>&nbsp;</span>"
								+"<a name='like' class='inter' role='button' id='estado_"+value.id+"' value='"+value.id+"' href='#!' style='color:#3C5B28;'><span>Me gusta</span></a>"
							+"</div>"
						+"</div>"
					);
					/*
					Contador += 1;
					if (Contador === 4){
						Global_idUltimaPublicacion = value.id;
						EstadosUsuario.append("Ultima publicacion: "+Global_idUltimaPublicacion);
					}
					*/					
				});
			});						
		}
		function ActualizarEstados(){
			var EstadosUsuario = $("#Estados"); 
			var route = "http://localhost:8000/estadosusuario";
			var user_id = $("#user_id");
			var Contador = 0;
			$.get(route, function(res){
				Contador += 1;
				if (Contador === 4){
					Global_idUltimaPublicacion = value.id;
				}
				$(res).each(function(key,value){
					var TimeAgo = value.created_at;
					EstadosUsuario.append(
						"<div class='list-group'>"
							+"<div class='list-group-item'>"												  	
								  	+"<h4><a href='/profile' style='color:#3C5B28;'>"
								  		+"<img class='media-object' src='http://localhost:8000/images/user.png' data-holder-rendered='true' style='width: 32px; height: 32px;'/>"
										+value.nombre+" "+value.apellido
									+"</a></h4>"
									+"<small>"
										+"Publicó <abbr class=\'timeago\' title=\'"+TimeAgo+"\'>"+TimeAgo+"</abbr>"
									+"</small><hr>"		
									+"<p>"+value.status+"</p>"
							+"</div>"
							+"<div class='list-group-item panel-footer'>"
							+"<span class='glyphicon glyphicon-thumbs-up'>&nbsp;</span>"
								+"<a name='like' class='inter' role='button' id='estado_"+value.id+"' value='"+value.id+"' href='#!' style='color:#3C5B28;'><span>Me gusta</span></a>"
							+"</div>"
						+"</div>"
					);
				});
			});						
		}		
		function ContarEstados(){
			var CargarEstados = $("#CargarEstados"); 
			var route = "http://localhost:8000/contarestados";
			var user_id = $("#user_id");
			var Contador = 0;
			$.get(route, function(res){
				$("#EstadosNuevos").value = "";
				$(res).each(function(key,value){
					Contador += 1;
					if (Contador === 5){
						Global_idUltimaPublicacion = value.id;
						//CargarEstados.append(Contador);
						//console.log(Contador);
					}
				});
				$("#EstadosNuevos").append(Contador + " <small>¡Publicaciones Nuevas!</small>");
				//console.log(Contador);
			});						
		}		
		$("#CargarEstados").click(function(){
			CargarEstados();
		});
		//$("abbr.timeago").timeago(); 
	//});
});
