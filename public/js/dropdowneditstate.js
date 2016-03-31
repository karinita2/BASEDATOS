//para setear los valores de los combos
function setValueSelect(SelectId, Value) {
        SelectObject = document.getElementById(SelectId);
        for(index = 0;  index < SelectObject.length;  index++) {
            if(SelectObject[index].value == Value) SelectObject.selectedIndex = index;
        }
}

function cargarCombosEdit(){
	$.get('/config/instituciones/'+$("#estado").val()+'/getMunicipios', function(response, state){
			
			$("#municipio_id").empty();
			$("#parroquia_id").empty();
			$("#municipio_id").append("<option value='0'>Seleccione un municipio</option>");
			$(response).each(function(key, value){
				
				$("#municipio_id").append("<option value='"+value.id+"'>"+value.municipio+"</option>");

			});
			setValueSelect("municipio_id", $("#municipio").val());
		});

		$.get('/config/instituciones/'+$("#municipio").val()+'/getParroquias', function(response, state){
			
			$("#parroquia_id").empty();
			$("#parroquia_id").append("<option value='0'>Seleccione una parroquia</option>");
			$(response).each(function(key, value){
				
				$("#parroquia_id").append("<option value='"+value.id+"'>"+value.parroquia+"</option>");

			});
			setValueSelect("parroquia_id", $("#municipio").val());

		});

}

//Para cargar las materias asignadas a un docente
function cargarMateriasDocente(){
	$.get('/registro/docentes/'+$("#cedula").val()+'/getMateriasDocente', function(response, state){
			
			//$("#materia_config_id").empty();
			//$("#materia_config_id").append("<option value='0'>Seleccione un municipio</option>");
			$('#materia_config_id').val(response);

			$('#materia_config_id').trigger("chosen:updated");
			
		});
}