	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
		VerificarTickets();
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	$("#participar").click(function(){
		console.log("hola");
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
			type: 'POST',
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
			

/*
			$(res).each(function(key,value){
				
				if(parseInt(value.coins)>0){
					$("#CantidadCoins").append(formatNumber.new(value.coins, "$ "));	
				}
					//$("#CantidadCoins").html("<p>0</p>");	
			});
*/
		});			
	}
	/*FUNCIONES Y PROCEDIMIENTOS*/
});





