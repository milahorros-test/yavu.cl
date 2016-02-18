	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	var Global_swap_notificaciones = true;
	var Global_swap_mensajes = true;
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/

	/*MÉTODOS CONSTRUCTORES*/

	
	/*SELECTORES*/

  	$(function () {
  		var popover = $('[data-toggle="popover"]');
    	popover.popover({ html : true , trigger : 'manual'}); 

		$('#Notificaciones, #CantidadNotificaciones').click(function(){
			var data = "<div class='list-group'>";
				data +=	"<div class='list-group-item'><a class='text-info' href='#!'>Notificacion 1</a></div>";
				data += "<div class='list-group-item'><a class='text-info' href='#!'>Notificacion 2</a></div>";
				data += "<div class='list-group-item-full-header'><a class='text-warning' href='#!'>ver más</a></div>";
				data += "</div>";

        	$('#Notificaciones').attr('data-content', data);

        	if(Global_swap_notificaciones){
        		$('#Notificaciones').popover('show');
        		$('#Mensajes').popover('hide');
        		Global_swap_notificaciones = false;	
        	}else{
        		$('#Notificaciones').popover('hide');
        		Global_swap_notificaciones = true;
        	}
        	
			
			


		});

		$('#Mensajes, #CantidadMensajes').click(function(){
			var data = "<div class='list-group'>";
				data +=	"<div class='list-group-item'><a class='text-info' href='#!'>Mensaje 1</a></div>";
				data += "<div class='list-group-item'><a class='text-info' href='#!'>Mensaje 2</a></div>";
				data += "<div class='list-group-item-full-header'><a class='text-warning' href='#!'>ver más</a></div>";
				data += "</div>";

        	$('#Mensajes').attr('data-content', data);

        	if(Global_swap_mensajes){
        		$('#Mensajes').popover('show');	
        		$('#Notificaciones').popover('hide');
        		Global_swap_mensajes = false;
        	}else{
        		$('#Mensajes').popover('hide');	
        		Global_swap_mensajes = true;
        	}


		});

			




    	//popover.attr('data-content', "<a>saadasdasdasd</a>");
  	})



	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/

	/*FUNCIONES Y PROCEDIMIENTOS*/
});