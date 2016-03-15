//EcmaScript 5

$(document).ready(function(){

//Combo de Estado
$("#estado_id").change(function(event){
	$.get('/config/instituciones/'+event.target.value+'/getMunicipios', function(response, state){
		
		$("#municipio_id").empty();
		$(response).each(function(key, value){
			
			$("#municipio_id").append("<option value='"+value.id+"'>"+value.municipio+"</option>");

		});

	});

});

//Combo de Municipio
$("#municipio_id").change(function(event){
	$.get('/config/instituciones/'+event.target.value+'/getParroquias', function(response, state){
		
		$("#parroquia_id").empty();
		$(response).each(function(key, value){
			
			$("#parroquia_id").append("<option value='"+value.id+"'>"+value.parroquia+"</option>");

		});

	});

});




});



//EcmaScript 6

/*

$("#estado_id").change(event => {
	$.get('/config/instituciones/${event.target.value}/getMunicipios', function(response, state){
		
		$("#municipio_id").empty();
		response.forEach(element => {
			
			$("#municipio_id").append('<option value=${value.id}> ${value.municipio}</option>');

		});

	});

});
*/
