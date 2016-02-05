$(document).ready(function(){	
	$("#publicar").click(function(){
		//console.log("click");
		if (document.getElementById("status").value !== "") {
			var status = $("#status").val();
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
		}else{
			document.getElementById("status").focus();
		}
	});
	$("#limpiar").click(function(){
		document.getElementById("status").value = "";
	});

});