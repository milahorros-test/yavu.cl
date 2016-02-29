	$(document).ready(function(){	
	/*DECLARACIÓN DE VARIABLES GLOBALES*/
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	$("#BuscarSorteo").click(function(e){
		BuscarSorteo();
		e.preventDefault();
	});
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	/*$("#usuario").on('keypress', function(e) { 		
	    if(e.which == 13) {
	        BuscarUsuario();
	    }
	});	*/
	$('#nombre_sorteo').keydown(function (e)
	{
	    if(e.keyCode == 13 && $("#nombre_sorteo").val())
	    {
	        BuscarSorteo();

	    }

	    //e.preventDefault();
	})	

	$('#sorteothumb').keydown(function (e)
	{
	    if(e.keyCode == 13 && $("#sorteothumb").val())
	    {
	        BuscarSorteoThumb();

	    }

	    //e.preventDefault();
	})	
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/

	function BuscarSorteo(){
		console.log("click");
		var NombreSorteo = $("#nombre_sorteo").val();
		var route = "http://localhost:8000/buscarsorteo/"+NombreSorteo+"";
		$("#SorteoList").text("");
		$.get(route, function(res){
			$("#SorteoList").append(
					"<thead>"
						+"<th>Nombre</th>"
						+"<th>Descripcion</th>"
						+"<th>Estado Sorteo</th>"
						+"<th>Operaciones</th>"
					+"</thead>"
				);
			$(res).each(function(key,value){
				$("#SorteoList").append(
						"<tbody><td>"+value.nombre_sorteo+"</td>"
						+"<td>"+value.descripcion+"</td>"
						+"<td>"+value.estado_sorteo+"</td>"
						+"<td> <a href='sorteos/" + value.id + "/edit' class='btn btn-primary'>Editar</a> </td>");								 

			});
		});						
	}	
	/*FUNCIONES Y PROCEDIMIENTOS*/
});


	/*FUNCIONES Y PROCEDIMIENTOS*/

	function BuscarSorteoThumb(){
		
		var NombreSorteo = $("#sorteothumb").val();
		var route = "http://localhost:8000/buscarsorteo/"+NombreSorteo+"";
		$("#SorteoListThumb").text("");
		$.get(route, function(res){
			console.log("clickthum");
			$("#SorteoListThumb").append(
				'<div class="container" id="tourpackages-carousel">'
				+'<div class="row">');
			$(res).each(function(key,value){
				$("#SorteoListThumb").append(
						
					'<div class="col-md-4">'
				        +'<div class="thumbnail">'
				            +'<img src="images/empresa.png" alt="">'
					            +'<div class="caption">'
					                +'<h4>'+value.nombre_sorteo+'</h4>'
					            +'</div>'
					        +'<td>'+value.descripcion+'</td>'
							+'<td>'+value.estado_sorteo+'</td>'
					    +'</div>'					        
					+'</div>'
				);								 
			});
			$("#SorteoListThumb").append(
					'</div>'
				+'</div>');
		});						
	}	
	/*FUNCIONES Y PROCEDIMIENTOS*/



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
