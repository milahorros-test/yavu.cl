$(document).ready(function(){	
	//$("#CargarEstados").click(function(){
		console.log("click");
		var EstadosUsuario = $("#Estados"); 
		var route = "http://localhost:8000/estadosusuario";
		var user_id = $("#user_id");
		$.get(route, function(res){
			$(res).each(function(key,value){
				var TimeAgo = value.created_at;
				EstadosUsuario.append(

					"<div class='list-group'><div class='list-group-item'>"												  	
							  	+"<h4><a href='/profile' style='color:#3C5B28;'>"
							  		+"<img class='media-object' src='http://localhost:8000/images/user.png' data-holder-rendered='true' style='width: 32px; height: 32px;'>"
									+value.nombre+" "+value.apellido
								+"</a></h4>"
								+"<small>"
									+"Publicó <abbr class=\'timeago\' title=\'"+TimeAgo+"\'>"+TimeAgo+"</abbr>"
								+"</small><hr>"		
								+"<p>"+value.status+"</p>"
								+"<hr><a class='inter' name='like' id='estado_"+value.id+"' value='"+value.id+"' href='#!' style='color:#3C5B28;'>Me gusta</a>"
					+"</div></div>");
						
					
			});
		});
		//$("abbr.timeago").timeago(); 
	//});
});
