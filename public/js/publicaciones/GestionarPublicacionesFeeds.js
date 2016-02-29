$(document).ready(function(){	
	/*DECLARACION DE VARIABLES GLOBALES*/
	var Global_idUltimaPublicacion;
	var Global_ContadorCargaPublicaciones;
	var Global_Control = true;
	/*DECLARACION DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/

	  CargarEstados();
	//LimpiarEstados();

	setInterval(function()
	{
		var a = $(".timeago");
		for(var i = 0; i < a.length ; i++){
			var elemento = document.getElementById( a[i].id );
			$('#'+a[i].id).text("" + humanTiming( elemento.title ) );
		}
	},40000);

	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/

	$("#CargarEstados").click(function(e)
	{
		$("#EstadosNuevos").append("");
		CargarEstados();			
		e.preventDefault();
	});

	$("#publicar").click(function(e)
	{
		document.getElementById("idUltima").value = "0";	

		$("#Estados").empty();		
		
		if (document.getElementById("status").value !== "") {
			var status = $("#status").val();
			status = limpiar(status);
			var user_id = $("#user_id").val();
			var token = $("#token").val();
			var route = "http://localhost:8000/estados";
			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'POST',
				dataType: 'json',
				data: {
					status: status,
					user_id: user_id
				},
				success:function(){
				    document.getElementById("status").value = "";
				}
			});	
			
		}else{
			document.getElementById("status").focus();
		}	
		CargarEstados();
		e.preventDefault();	
	});

	$("#limpiar").click(function(e)
	{
		document.getElementById("status").value = "";
		e.preventDefault();
	});

	$( "#status" ).change(function(e) 
	{
		var status = $("#status").val();
		var status_2 = limpiar(status);
		status_2 = limpiar(status);
		status_2 = limpiar(status);
		if (status != status_2){
			//console.log("son distintos");
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
	function ActualizarEstados()
	{
		var EstadosUsuario = $("#Estados").val(); 
		$("#Estados").value = "";
		var route = "http://localhost:8000/estadosusuario";
		var user_id = $("#user_id");
		var Contador = 0;
		$.get(route, function(res){
			Contador += 1;
			if (Contador === 4){
				Global_idUltimaPublicacion = value.id;
			}
			$(res).each(function(key, value){
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
							+"<a name='like' class='inter' role='button' id='estado_"+value.id+"' value='"+value.id+"' href='#!' style='color:#3C5B28;'>"
							+"<span>Me gusta</span></a>"
						+"</div>"
					+"</div>";
				EstadosUsuario.appendTo("#e").effects("highlight", {}, 12000);
			});
		});						
	}



	function CargarEstados()
	{
    var Estados = $("#Estados");
    //var empresa = $("#empresa").val();
    Global_idUltimaPublicacion = $("#idUltima").val();
    var route = "http://localhost:8000/cargarfeeds/"+Global_idUltimaPublicacion;
    //var user_id = $("#user_id");
    //var empresa_id = $("#empresa_id");
    var Contador = 0;
    $.get(route, function(res){
      mostrarCargando();
      $(res).each(function(key,value){
        var TimeAgo = value.created_at;
        Global_idUltimaPublicacion = value.id;
        Estados.append(
          "<div class='list-group'>"
          +"<div class='list-group-item'>"
          +"<h4><a href='/empresa/"+value.nombreEmp+"/' style='color:#3C5B28;'>"
          +"<img class='media-object' src='http://localhost:8000/images/user.png' data-holder-rendered='true' style='width: 32px; height: 32px;'/>"
          +value.nombreEmp+" Idp:("+Global_idUltimaPublicacion+")"
          +"</a></h4>"
          +"<small>"
          +"Publicó <abbr class=\'timeago\' title=\'"+TimeAgo+"\'>"+humanTiming(TimeAgo)+"</abbr>"
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
        //Estados.append("Ultima publicacion: "+Global_idUltimaPublicacion);
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

  function ContarInteracciones(status_id)
  {
    status_id = status_id;
    var route = "http://localhost:8000/contarinteracciones/"+status_id;
    var user_id = $("#user_id").val();
    var Contador = 0;
    $.get(route, function(res){
      $(res).each(function(key,value){
          if(value.user_id === user_id){
            $('#estado_'+status_id).addClass("text-info").fadeIn();
          }
          Contador += 1;
      });
      $("#badge_"+status_id).text(Contador);
    });   
  }    

	function ContarEstados()
	{
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
				}else{
					$("#EstadosNuevos").append("");
				}
			});
			$("#EstadosNuevos").append(Contador + " <small>¡Publicaciones Nuevas!</small>");
		});						
	}

	function humanTiming(time)
	{
		var now = new Date();
		var nowTime = now.getTime()
		nowTime = nowTime - Date.parse(time);
		console.log(nowTime);
	    var tokens = [
	    	[1, 'segundo'],
	    	[60, 'minuto'],
	    	[3600, 'hora'],
	    	[86400, 'día'],
	    	[604800, 'semana'],
	    	[2592000, 'mes'],
	    	[31536000, 'año']
	   ];
	   //console.log(JSON.stringify(tokens[0][1])); //unidad
	   //console.log(JSON.stringify(tokens[0][0])); //cantidad
	   	var numberOfUnits = 0;
		for(var i = 0, len = tokens.length; i < len; i++){
			if (nowTime < tokens[i][0]) {	
				

				if (tokens[i][1] === 'día'){
					numberOfUnits = nowTime/(tokens[i-1][0])*10;

				}else if(tokens[i][1] === 'semana'){
					numberOfUnits = nowTime*tokens[i][0]*10;

				}else if(tokens[i][1] === 'mes'){

					//numberOfUnits = nowTime*tokens[i+1][0]*10;
					console.log(tokens[i][1]+"/"+tokens[i][0]+"/"+numberOfUnits+"/"+nowTime);
				}

				if(Math.floor(numberOfUnits) > 365 && tokens[i][1] === 'año'){
					
					//console.log(numberOfUnits+"//"+tokens[i][0]);
					var mes = Math.floor(numberOfUnits/tokens[i][0]);

					//console.log(mes+"//"+i+"//"+tokens[i][0]+"//"+numberOfUnits);

					if ( mes === 0 ){ mes = 1; }
					return "hace "+mes+" "+tokens[i][1]+((mes>1)?'s':'');

				}else if(Math.floor(numberOfUnits) >= 31 && Math.floor(numberOfUnits) < 365){
					var semana = Math.round(numberOfUnits/12);
					return "hace "+semana+" "+tokens[i+1][1]+((semana>1)?'s':'');

				}else if(Math.floor(numberOfUnits) >= 7 && Math.floor(numberOfUnits) < 31){
					var dia = Math.round(numberOfUnits/7);
					return "hace "+dia+" "+tokens[i+1][1]+((dia>1)?'s':'');

				}else if(Math.floor(numberOfUnits) >= 1 && Math.floor(numberOfUnits) < 7){
					var hora = Math.floor(numberOfUnits);
					return "hace "+hora+" "+tokens[i][1]+((hora>1)?'s':'');	

				}else if(Math.floor(numberOfUnits) < 1){
					//console.log(nowTime+"(nowTime)/"+i+"(i)/"+tokens[i][0]+"(cant)/"+tokens[i][1]+"(text)/");
					//console.log(numberOfUnits+"/"+tokens[i][1]);


					if (numberOfUnits > 0.0416 ){
						var minuto = Math.floor(24*numberOfUnits);
						return "hace "+minuto+" "+tokens[i-1][1]+((minuto>1)?'s':'');	

					}else if(numberOfUnits < 0.0416 && numberOfUnits > 0.000693333 ){						
						numberOfUnits = Math.floor(((numberOfUnits*100)/4.)*60);
						return "hace "+numberOfUnits+" "+tokens[i-2][1]+((numberOfUnits>1)?'s':'');

					}else if(numberOfUnits < 0.000293333 ){
						return 'hace pocos minutos';

					}
				}	
			}else{	
				nowTime = Math.floor(nowTime/tokens[i][0]);					
			}
		}	    	
	}

	function limpiar(status)
	{

		status = status.replace("<script>", "");
		status = status.replace("<script", "");
		status = status.replace("<scrip", "");
		status = status.replace("<scri", "");
		status = status.replace("<scr", "");
		status = status.replace("<sc", "");
		status = status.replace("<s", "");
		status = status.replace("<", ""); 
		status = status.replace("<<<", "");
		status = status.replace("<<", "");
		
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

	function mostrarCargando()
	{
		$("#msj-estado").fadeIn(1000);
		return true;
	}

	function ocultarCargando()
	{
		$("#msj-estado").fadeOut();
		return true;
	}

	/*FUNCIONES Y PROCEDIMIENTOS*/
});