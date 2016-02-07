$(document).ready(function(){	
	$("#publicar").click(function(){
		//console.log("click");
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
					$("#msj-success").fadeIn();
				    setTimeout(function() {
				        $("#msj-success").fadeOut(1000);
				    },800);				
				    document.getElementById("status").value = "";				    
				}
			});			
			CargarEstados();
		}else{
			document.getElementById("status").focus();
		}		
	});
	$("#limpiar").click(function(){
		document.getElementById("status").value = "";
	});
	function limpiar(status){
		status = status.replace("<script>", "");
		status = status.replace("<script", "");
		status = status.replace("<scrip", "");
		status = status.replace("<scri", "");
		status = status.replace("<scr", "");
		status = status.replace("<sc", "");
		status = status.replace("<s", "");
		status = status.replace("<", ""); 
		status = status.replace("<>", ""); 
		status = status.replace(">", ""); 
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
		/*
		var status = $("#status").val();
		if (status !== limpiar(status)){
		  $('#msj-error').append('<p>Text changed from <strong>' + 
		    previousText + '</strong> to <strong>' + $(this).val() + 
		    '</strong> </p>');
			$("#msj-error").fadeIn();
			setTimeout(function() {
			    $("#msj-error").fadeOut(1000);
			},800);			
		}	
		*/
	$( "#status" ).change(function() {
		var status = $("#status").val();
		var status_2 = limpiar(status);
		if (status != status_2){
			console.log("son distintos");
		}	

	});

});
