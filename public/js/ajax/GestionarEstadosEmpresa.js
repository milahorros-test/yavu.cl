$(document).ready(function(){	
	/*DECLARACION DE VARIABLES GLOBALES*/
	var Global_idUltimaPublicacion;
	var Global_ContadorCargaPublicaciones;
	/*DECLARACION DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/

	CargarEstados();

	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	$("#CargarEstados").click(function(e){
		$("#EstadosNuevos").append("");
		CargarEstados();			
		e.preventDefault();
	});

	$("#publicar").click(function(e){
		document.getElementById("idUltima").value = "0";				    
		$("#Estados").empty();		
		if (document.getElementById("status").value !== "") {
			var status = $("#status").val();
			status = limpiar(status);
			var user_id = $("#user_id").val();
			var empresa_id = $("#empresa_id").val();
			var token = $("#token").val();
			var route = "http://localhost:8000/estadosempresa";
			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'POST',
				dataType: 'json',
				data: {
					status: status,
					user_id: user_id,
					empresa_id: empresa_id
				},
				success:function(){
					$("#msj-success").fadeIn();
				    setTimeout(function() {
				        $("#msj-success").fadeOut(1000);
				    },800);				
				    document.getElementById("status").value = "";
				    console.log("La ultima publicacion ID: "+$("#idUltima").val());
				}
			});	
			
			//ContarEstados();
		}else{
			document.getElementById("status").focus();
		}	
		CargarEstados();
		e.preventDefault();	
	});

	$("#limpiar").click(function(e){
		document.getElementById("status").value = "";
		e.preventDefault();
	});

	$( "#status" ).change(function(e) {
		var status = $("#status").val();
		var status_2 = limpiar(status);
		status_2 = limpiar(status);
		status_2 = limpiar(status);
		if (status != status_2){
			console.log("son distintos");
			var status = $("#status").val();
			if (status !== limpiar(status)){
			  $('#msj-error').append();
				$("#msj-error").fadeIn();
				setTimeout(function() {
				    $("#msj-error").fadeOut(8000);
				},800);			
			}		
		}	
		e.preventDefault();
	});
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/
	function ActualizarEstados(){
		var EstadosUsuario = $("#Estados").val(); 
		$("#Estados").val() ="";
		var route = "http://localhost:8000/estadosempresa";
		var user_id = $("#user_id");
		var Contador = 0;
		$.get(route, function(res){
			Contador += 1;
			if (Contador === 4){
				Global_idUltimaPublicacion = value.id;
			}
			$(res).each(function(key,value){
				var TimeAgo = value.created_at;
				var Estado = 
					"<div id='status' class='list-group'>"
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
					+"</div>";

				EstadosUsuario.appendTo("#e").effects("highlight", {}, 12000);
				//$("#Estados").appendTo('#Estados').effects("highlight", {}, 12000);


			});
		});						
	}

	function limpiar(status){
		status = status.replace("<script>", "");
		status = status.replace("<script", "");
		status = status.replace("<scrip", "");
		status = status.replace("<scri", "");
		status = status.replace("<scr", "");
		status = status.replace("<sc", "");
		status = status.replace("<s", "");
		status = status.replace("<<<", "");
		status = status.replace("<<", "");
		status = status.replace("<", ""); 
		status = status.replace(">>>", "");
		status = status.replace(">>", "");
		status = status.replace(">", ""); 
		status = status.replace("<>", ""); 
		status = status.replace("</script>", ""); 
		status = status.replace("</script", ""); 
		status = status.replace("</scrip", ""); 
		status = status.replace("</scri", ""); 
		status = status.replace("</scr", ""); 
		status = status.replace("</sc", ""); 
		status = status.replace("</s", ""); 
		status = status.replace("</", ""); 
		status = status.replace("'", ""); 
		status = status.replace("&", ""); 
		status = status.replace('"', ""); 
		status = status.replace("('", ""); 
		status = status.replace("')", ""); 
		status = status.replace(";", ""); 
		status = status.replace(">(", ""); 
		status = status.replace(")<", ""); 
		status = status.replace(">('", ""); 
		status = status.replace("')<", ""); 
		status = status.replace("')<", ""); 
		return status;
	}

	function CargarEstados(){
		var EstadosUsuario = $("#Estados"); 
		Global_idUltimaPublicacion = $("#idUltima").val();
		var route = "http://localhost:8000/estadosempresa/"+Global_idUltimaPublicacion;
		var user_id = $("#user_id");
		var empresa_id = $("#empresa_id");
		var Contador = 0;
		$.get(route, function(res){
			mostrarCargando();
			$(res).each(function(key,value){				
				var TimeAgo = value.created_at;
				Global_idUltimaPublicacion = value.id;		
				EstadosUsuario.append(
					"<div class='list-group'>"
						+"<div class='list-group-item'>"												  	
							  	+"<h4><a href='/empresa/"+value.nombreEmp+"/' style='color:#3C5B28;'>"
							  		+"<img class='media-object' src='http://localhost:8000/images/user.png' data-holder-rendered='true' style='width: 32px; height: 32px;'/>"
									+value.nombreEmp+" "+value.apellido+" Idp:("+Global_idUltimaPublicacion+")"
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
				document.getElementById("idUltima").value =  Global_idUltimaPublicacion;

				Contador += 1;							
			});
			if(Contador < 5){					
				//EstadosUsuario.append("Ultima publicacion: "+Global_idUltimaPublicacion);
				console.log("Hay menos de 5 registros");
				$("#msj-finPublicaciones").fadeIn();	
				setTimeout(function() {
				    $("#msj-finPublicaciones").fadeOut(3000);
				},1000);		
			}
			ocultarCargando();		
			Global_ContadorCargaPublicaciones += 1 * 5;
		});						
	}
	function mostrarCargando(){		
		$("#msj-estado").fadeIn(1000);
	}
	function ocultarCargando(){
		$("#msj-estado").fadeOut();
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
					$("#EstadosNuevos").append(Contador + " <small>¡Publicaciones Nuevas!</small>");
					//CargarEstados.append(Contador);
					//console.log(Contador);
				}else{
					$("#EstadosNuevos").append("");
				}
			});
			$("#EstadosNuevos").append(Contador + " <small>¡Publicaciones Nuevas!</small>");
			//console.log(Contador);
		});						
	}

	/*FUNCIONES Y PROCEDIMIENTOS*/
    // EVENTO CUANDO SE MUEVE EL SCROLL, EL MISMO APLICA TAMBIEN CUANDO SE RESIZA
    var change = false;
    var window_y = $(window).scrollTop();
	$(window).scroll(function(){
		var EstadosUsuario = $("#Estados"); 
         // VALOR QUE SE HA MOVIDO DEL SCROLL
        scroll_critical = parseInt($("#Estados").height()); // VALOR DE TU DIV
        console.log(scroll_critical);
        if (window_y > scroll_critical) { // SI EL SCROLL HA SUPERADO EL ALTO DE TU DIV
           // ACA MUESTRAS EL OTRO DIV Y EL OCULTAS EL DIV QUE QUIERES
           CargarEstados();
        }
	});	
});

/*
				EstadosUsuario.append(
					"<div class='list-group'>"
					+"No hay mas publicaciones"
					+"</div>"
				);   
*/