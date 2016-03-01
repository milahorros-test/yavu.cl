	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/

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
	/*FUNCIONES Y PROCEDIMIENTOS*/
});





