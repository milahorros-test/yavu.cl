	$(document).ready(function(){	
	/*DECLARACIÓ DE VARIABLES GLOBALES*/
	var Busqueda = "";
	var letter = "";
	/*DECLARACIÓN DE VARIABLES GLOBALES*/

	/*MÉTODOS CONSTRUCTORES*/
	$("#BuscarSorteo").click(function(e){
		//BuscarSorteo();
		e.preventDefault();
	});
	/*MÉTODOS CONSTRUCTORES*/

	/*SELECTORES*/
	/*$("#usuario").on('keypress', function(e) { 		
	    if(e.which == 13) {
	        BuscarUsuario();
	    }
	});	*/
	$('.buscar').keyup(function(e){
		//console.log(String.fromCharCode(e.keyCode));
		//console.log(String.fromCharCode(112));
		//console.log(e.keyCode);
		if(e.keyCode !== 32 && e.currentTarget.value.indexOf(String.fromCharCode(32)) > -1 )
		{
			Busqueda = e.currentTarget.value;
			Busqueda = ReemplazarVacios(Busqueda);
		}

		function ReemplazarVacios(Busqueda)
		{
			Busqueda = Busqueda.replace(String.fromCharCode(32), '+');
			Busqueda = Busqueda.replace('     ', '+');
			Busqueda = Busqueda.replace('    ', '+');
			Busqueda = Busqueda.replace('   ', '+');
			Busqueda = Busqueda.replace('  ', '+');
			Busqueda = Busqueda.replace('+++++', '+');
			Busqueda = Busqueda.replace('++++', '+');
			Busqueda = Busqueda.replace('+++', '+');
			Busqueda = Busqueda.replace('++', '+');
			Busqueda = Busqueda.replace('=', '');
			Busqueda = Busqueda.replace("'or'", '');
			Busqueda = Busqueda.replace("'and'", '');
			Busqueda = Busqueda.replace("script", '');
			Busqueda = Busqueda.replace("/", '');
			Busqueda = Busqueda.replace("'", '');
			Busqueda = Busqueda.replace('<', '');
			Busqueda = Busqueda.replace('>', '');

			if(Busqueda.indexOf(String.fromCharCode(32)) > -1 || Busqueda.indexOf(String.fromCharCode(219)) > -1 || Busqueda.indexOf(String.fromCharCode(48)) > -1 || Busqueda.indexOf(String.fromCharCode(16)) > -1)
			{          
				return ReemplazarVacios(Busqueda);
			}
			return Busqueda;
		}
	

		if(e.keyCode === 13)
		{
			if(Busqueda.substring(0,1) === '+')
			{
				Busqueda = Busqueda.substring(1, Busqueda.length);
			}

			console.log(Busqueda);
			//BUSCAR!
			BuscarSorteoThumb(Busqueda);

		}

		/*
		if(letter.length >= 1)
		{
			letter = letter.substring(letter.length-1, letter.length);
		}
		*/

		//console.log(letter);
		/*
		if(e.keyCode == 32)
		{
			if(letter !== '+' || letter !== String.fromCharCode(32) || letter !== ' ')
			{
				Busqueda += letter;
				Busqueda += '+';
			}
			
		}
		else 
		{
			Busqueda = Busqueda.replace(String.fromCharCode(32),'');	
			Busqueda += letter;
		}

		if(e.keyCode === 13)
		{
			console.log(Busqueda);
			Busqueda = "";
		}

		if(e.keyCode === 8)
		{
			letter = '';
			console.log(letter);
			var fin = Busqueda.length-1;
			Busqueda = Busqueda.substring(0, fin);			
		}

		console.log(Busqueda);
		*/
				

		

		/*
		if (letter.length>2)
		{
			letter = letter.substring(letter.length-1,letter.length);
			//console.log(letter);


			if(e.keyCode === 32 || letter === ' ')
			{
				//console.log(e.currentTarget.value);
				//Busqueda = '+'+dataWord;

				console.log('Ha pulsado un espacio');

				Busqueda += '+';

			}
			else if(e.keyCode === 13)
			{
				console.log(Busqueda);
				Busqueda = "";
			}
			else if(e.keyCode === 8)
			{
				Busqueda = Busqueda.substring(0, Busqueda.length-1);
			}
			else
			{
				Busqueda += letter;
			}


		}else{
			Busqueda += letter;
		}
		*/

		//console.log(e.currentTarget.value);

		//var dataWord = e.currentTarget.value;

		//console.log(e.currentTarget.value);
		//console.log(Busqueda);
	});

	$('#nombre_sorteo').keydown(function (e)
	{
	    if(e.keyCode == 13 && $("#nombre_sorteo").val())
	    {
	        //BuscarSorteo();

	    }

	    //e.preventDefault();
	})	

	$('#sorteothumb').keydown(function (e)
	{
	    if(e.keyCode == 13 && $("#sorteothumb").val())
	    {
	        //BuscarSorteoThumb();

	    }

	    //e.preventDefault();
	})	
	/*SELECTORES*/

	/*FUNCIONES Y PROCEDIMIENTOS*/

	function BuscarSorteo(Busqueda){
		console.log("click");
		var route = "http://yavu.hol.es/buscarsorteo/"+Busqueda+"";
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

	function BuscarSorteoThumb(Busqueda){
		
		var route = "http://yavu.hol.es/buscarsorteo/"+Busqueda+"";
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
		var route = "http://yavu.hol.es/contarparticipantes/"+sorteo_id;
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


