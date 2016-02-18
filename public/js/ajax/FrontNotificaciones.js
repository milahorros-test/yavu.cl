	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/

	/*MÉTODOS CONSTRUCTORES*/

	
	/*SELECTORES*/

  	$(function () {
  		var popover = $('[data-toggle="popover"]');
    	popover.popover({ html : true }); 

		$('#Notificaciones').click(function(){
			var data = 
						"<a class='list-group-item-full-header list-group-item-default text-info' href='#!' class='text-info'>Texto 1</a>"
						+"<a class='list-group-item-full-header list-group-item-default text-info' href='#!' class='text-info'>Texto 2</a>";

        	$('#Notificaciones').attr('data-content', "<div class='list-group'>"+data+"</div>");

        	$('#Notificaciones').popover();     

			$('#Mensajes').popover('hide');
			


		});

		$('#Mensajes').click(function(){
			var data = "<ul>"
							+"<li>"
								+"<a href='#!'>Texto 1</a>"
							+"</li>"
							+"<li>"
								+"<a href='#!'>Texto 2</a>"
							+"</li>"
						+"</ul>";

        	$('#Mensajes').attr('data-content', data);

        	$('#Notificaciones').popover();   			
			$('#Mensajes').popover();
			$('#Notificaciones').popover('hide');




		});

			




    	//popover.attr('data-content', "<a>saadasdasdasd</a>");
  	})



	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/

	/*FUNCIONES Y PROCEDIMIENTOS*/
});