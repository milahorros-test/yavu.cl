	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
		VerificarTickets();
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	$("#UsarTicket").click(function(){
		console.log("hola estoy usando ticket, aun estoy pendiente");
		UsarTicket();

	});	
	$(".participar").click(function(e){
		console.log(this+e);
	});
	$("#siquiero").click(function(){
		//console.log($("#user_id").val());
		CanjearTicket();

	});
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/

	function CanjearTicket()
	{
		$('#myModal').modal('hide');
		var user_id = $("#user_id").val();	
		var route = "http://localhost:8000/canjearticket/"+user_id;
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
	function UsarTicket()
	{
		$('#myModal').modal('hide');
		var user_id = $("#user_id").val();	

		//este sorteo id hay que validarlo
		var sorteo_id = $("#sorteo_id").val();
		var route = "http://localhost:8000/usarticket/"+user_id+"/"+sorteo_id;
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
		var route = "http://localhost:8000/verificartickets/"+user_id;
		$.get(route, function(res){
			console.log(res);
			if(res>0){
				$("#UsarTicket").removeAttr('style');	
			}
		});			
	}
	/*FUNCIONES Y PROCEDIMIENTOS*/
});





