	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
		VerificarTickets();
		/*
		setInterval(function()
		{
		},10000);
		*/

	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	$("#UsarTicket").click(function(){
		//console.log("hola estoy usando ticket, aun estoy pendiente");
		UsarTicket($(this).attr('value'));
		//console.log($(this).attr('value'));

	});	
	$(".participar").click(function(){
		$("#UsarTicket").val($(this).attr('value'));
		//console.log($(this).attr('value')+"/");
	});
	$("#siquiero").click(function(){
		//console.log($("#user_id").val());
		CanjearTicket();
		UsarTicket($("#UsarTicket").attr('value'))
;	});
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/

	function CanjearTicket()
	{
		$('#myModal').modal('hide');
		var user_id = $("#user_id").val();	
		var route = "http://yavu.hol.es/canjearticket/"+user_id;
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'GET',
			dataType: 'json',
			data: {
				user_id: user_id,
			},
			success:function(){
				 
			}
		});			
	}
	function UsarTicket(sorteo_id)//Esto deberia insertar un ticket en negativo y dejarlo rendido para el sorteo correspondiente.
	{
		$('#myModal').modal('hide');
		var user_id = $("#user_id").val();	

		//este sorteo id hay que validarlo
		//var sorteo_id = $("#sorteo_id").val();
		console.log(sorteo_id);
		var route = "http://yavu.hol.es/usarticket/"+user_id+"/"+sorteo_id;
		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'GET',
			dataType: 'json',
			data: {
				user_id: user_id,
				sorteo_id: sorteo_id
			},
			success:function(){
				 
			}
		});
	}
	function VerificarTickets()
	{
		var user_id = $("#user_id").val();
		var route = "http://yavu.hol.es/verificartickets/"+user_id;
		$.get(route, function(res){
			console.log(res);
			if(res>0){
				$("#UsarTicket").removeAttr('style');	
			}
		});			
	}
	/*FUNCIONES Y PROCEDIMIENTOS*/
});





