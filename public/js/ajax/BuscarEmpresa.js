	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	$("#BuscarEmpresa").click(function(e){
		BuscarEmpresa();
		e.preventDefault();
	});
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	/*$("#usuario").on('keypress', function(e) { 		
	    if(e.which == 13) {
	        BuscarUsuario();
	    }
	});	*/
	$('#empresa').keydown(function (e)
	{
	    if(e.keyCode == 13 && $("#empresa").val())
	    {
	        BuscarEmpresa();
	    }

	    //e.preventDefault();
	})	
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/

	function BuscarEmpresa(){
		console.log("click");
		var NombreEmpresa = $("#empresa").val();
		var route = "http://localhost:8000/buscarempresa/"+NombreEmpresa+"";
		$("#EmpresaList").text("");
		$.get(route, function(res){
			$("#EmpresaList").append(
					"<thead>"
						+"<th>Nombre</th>"
						+"<th>Correo</th>"
						+"<th>Ciudad</th>"
						+"<th>Fono</th>"
						+"<th>Aniversario Empresa</th>"
						+"<th>Encargado</th>						"
						+"<th>Operaciones</th>"
					+"</thead>"
				);
			$(res).each(function(key,value){
				$("#EmpresaList").append(
						"<tbody><td>"+value.nombre+"</td>"
						+"<td>"+value.correo+"</td>"
						+"<td>"+value.ciudad+"</td>"
						+"<td>"+value.fono+"</td>"
						+"<td>"+value.fecha_creacion+"</td>"
						+"<td>"+value.encargado+"</td>"
						+"<td> <a href='empresas/" + value.id + "/edit' class='btn btn-primary'>Editar</a> </td>");								 

			});
		});						
	}	
	/*FUNCIONES Y PROCEDIMIENTOS*/
});

 /* FUNCION DE FILTRO */
 
$(document).ready(function () {
            $('.results > li').hide();

            $('div.tags').find('input:checkbox').click(function () {
                $('.results > li').hide();
                $('div.tags').find('input:checked').each(function () {
                    $('.results > li.' + $(this).attr('rel')).show();
                });
            });
        });    
