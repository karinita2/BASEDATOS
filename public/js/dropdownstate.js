//EcmaScript 5

$(document).ready(function(){

//Combo de Estado
$("#estado_id").change(function(event){
	//console.log("hola");
	$.get('/config/instituciones/'+event.target.value+'/getMunicipios', function(response, state){
		
		$("#municipio_id").empty();
		$("#paroquia_id").empty();
		$("#municipio_id").append("<option value='0'>Seleccione un municipio</option>");
		$(response).each(function(key, value){
			
			$("#municipio_id").append("<option value='"+value.id+"'>"+value.municipio+"</option>");

		});

	});

});

//Combo de Municipio
$("#municipio_id").change(function(event){
	$.get('/config/instituciones/'+event.target.value+'/getParroquias', function(response, state){
		
		$("#parroquia_id").empty();
		$("#parroquia_id").append("<option value='0'>Seleccione una parroquia</option>");
		$(response).each(function(key, value){
			
			$("#parroquia_id").append("<option value='"+value.id+"'>"+value.parroquia+"</option>");

		});

	});

});

 

});

