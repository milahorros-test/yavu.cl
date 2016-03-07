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
			var ImagenSorteo = "";
			$("#SorteoListThumb").append(
				'<div class="container" id="tourpackages-carousel">'
				+'<div class="row">');
			$(res).each(function(key,value){

				ImagenSorteo = '/img/users/'+value.imagen_sorteo;

				if (value.imagen_sorteo === "" || value.imagen_sorteo === null)
				{
					ImagenSorteo = "/images/empresa.png";
				}


				$("#SorteoListThumb").append(
						
					'<div class="col-md-4">'
				        +'<div class="thumbnail">'
				            +'<img src="'+ImagenSorteo+'" alt="">'
					            +'<div class="caption">'
					             +'<td><h5>Nombre Sorteo</h5></td>'
					                +'<h4>'+value.nombre_sorteo+'</h4>'
					            +'</div>'
					            +'<td><h5>Descripción</h5></td>'
					        +'<td>'+value.descripcion+'</td>'
					        +'<br><span id="CantidadParticipantes"></span>'
					    +'</div>'					        
					+'</div>'

				);								 
			});
			$("#SorteoListThumb").append(
					'</div>'
				+'</div>');
		});		
		ContarParticipantes();				
	}	

	
	function ContarParticipantes()
	{
		var sorteo_id = $("#sorteo_id").val();
		var route = "http://localhost:8000/contarparticipantes/"+sorteo_id;
		$.ajax({
			url: route,
			type: 'GET',
			dataType: 'json',
			cache: false,
			async: true,			
			success:function(data){
				 //$("#CantidadParticipantes").text();
				$(data).each(function(key,value){
					console.log(value.participantes);
				}); 
			}
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


