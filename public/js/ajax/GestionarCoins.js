$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	var formatNumber = {
	 separador: ".", // separador para los miles
	 sepDecimal: ',', // separador para los decimales
	 formatear:function (num){
	  num +='';
	  var splitStr = num.split('.');
	  var splitLeft = splitStr[0];
	  var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
	  var regx = /(\d+)(\d{3})/;
	  while (regx.test(splitLeft)) {
	  splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
	  }
	  return this.simbol + splitLeft  +splitRight;
	 },
	 new:function(num, simbol){
	  this.simbol = simbol ||'';
	  return this.formatear(num);
	 }
	}	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	ContarCoins();
	InfoEmpresas();
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/
	function ContarCoins(){
		var CargarEstados = $("#CargarEstados"); 
		var route = "http://localhost:8000/contarcoins";
		var user_id = $("#user_id");
		$.get(route, function(res){
			$("#CantidadCoins").value = "";
			$(res).each(function(key,value){
				console.log(value.coins);
				if(parseInt(value.coins)>0){
					$("#CantidadCoins").append(formatNumber.new(value.coins, "$ "));	
				}
					//$("#CantidadCoins").html("<p>0</p>");	
			});
		});						
	}
	function InfoEmpresas(){
		var user_id = $("#user_id").val();
		var route = "http://localhost:8000/infoempresas/"+user_id;
		console.log(user_id);
		$.get(route, function(res){
			$("#EstadoEmpresa").value = "";
			$(res).each(function(key,value){
				if(value.estado === "Pendiente"){
					//$("#EstadoEmpresa").removeClass("label-success");
					//$("#EstadoEmpresa").addClass("label-warning");
					$("#EstadoEmpresa").append(
						'<span style="" class="label label-warning">'
							+'<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>'
							+value.nombre+": "+value.estado
						+"</span>"					
					);
				}else if(value.estado === "Activo"){
					//$("#EstadoEmpresa").removeClass("label-warning");
					//$("#EstadoEmpresa").addClass("label-success");
					$("#EstadoEmpresa").append(
						'<span style="" class="label label-success">'
							+'<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>'
							+value.nombre+": <a href='empresa/"+value.nombre+"'>"+value.estado+"</a>"							
						+"</span>"					
					);					
				}					
	
			});
		});	
	}


	/*FUNCIONES Y PROCEDIMIENTOS*/

	
});