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

//para setear los valores de los combos
function setValueSelect(SelectId, Value) {
        SelectObject = document.getElementById(SelectId);
        for(index = 0;  index < SelectObject.length;  index++) {
            if(SelectObject[index].value == Value) SelectObject.selectedIndex = index;
        }
}

$(document).on('ready',function(e){

	$.get('/config/instituciones/'+document.getElementById("estado").value+'/getMunicipios', function(response, state){
		
		$("#municipio_id").empty();
		$("#parroquia_id").empty();
		$("#municipio_id").append("<option value='0'>Seleccione un municipio</option>");
		$(response).each(function(key, value){
			
			$("#municipio_id").append("<option value='"+value.id+"'>"+value.municipio+"</option>");

		});
		setValueSelect("municipio_id", document.getElementById("municipio").value);
	});

	$.get('/config/instituciones/'+document.getElementById("municipio").value+'/getParroquias', function(response, state){
		
		$("#parroquia_id").empty();
		$("#parroquia_id").append("<option value='0'>Seleccione una parroquia</option>");
		$(response).each(function(key, value){
			
			$("#parroquia_id").append("<option value='"+value.id+"'>"+value.parroquia+"</option>");

		});
		setValueSelect("parroquia_id", document.getElementById("parroquia").value);

	});




})
    

});

