//funcion para el calendario interactivo, tambien calcula la edad
$('.datepicker').datepicker({
			format: 'dd/mm/yyyy',
		}).on('changeDate', function (ev) {
			 $.get('/registro/docentes/'+ $("#fe_nac").val().replace(/\//g,"-") +'/getEdad', function(response, state){

				$("#edad").val(response);
			});
		});
		jQuery.fn.reset = function () {
				$(this).each (function() { this.reset(); });
		}
	

//permite que con la cedula se puedan buscar en la base de datos la informacion relacionada a un
//usuario-trabajador-docente-alumno-representante
$("#cedula").blur(function(event){

		if(event.target.value!=""){
			//console.log(event.target.value);
			$.get('/registro/docentes/'+event.target.value+'/getVerificaCedulaDocente', function(response, state){

				if(response!=0){
				   for (var attr in response) {
			         	
				   		$("#"+attr).val(response[attr]);
	   				}
	   			}
	   			
	   			$.get('/registro/docentes/'+event.target.value+'/getTrabajadorJSON', function(response, state){
	   					//console.log();
	   					//si response[0]=="" entonces quiere decir que el json de datos de trabajador
	   					//se encuentra lleno
	   					//console.log(response[0]);
					   	if(typeof(response[0])== "undefined"){
						   for (var attr in response) {
					         	
						   		$("#"+attr).val(response[attr]);
			    			
			    			}	
			   			}
			   			//cuando no solo trae los nombres de los atributos entonces response[0]!=""
			   			/*
			   			else {
 							for (var attr in response) {
					         	
						   		$("#"+response[attr]).val('');
			    			
			    			}	

			   			}*/

						$.get('/registro/docentes/'+event.target.value+'/getUsuarioJSON', function(response, state){
							if(typeof(response[0])== "undefined"){
								$("#estado").val(response.estado_id);
				    			$("#municipio").val(response.municipio_id);
								$("#parroquia").val(response.parroquia_id);
								//console.log(response.parroquia_id);
							   for (var attr in response) {
						   	   		$("#"+attr).val('');
							   		$("#"+attr).val(response[attr]);
				    			}
				    			$('#idImg').attr('src','/images/users/'+response.nombre);
				    			cargarCombosEdit();
				    			cargarMateriasDocente();
				    		}
				    		//cuando no solo trae los nombres de los atributos entonces response[0]!=""
				   			/*
				   			else {
	 							for (var attr in response) {
						         	
							   		$("#"+response[attr]).val('');
				    			
				    			}	

				   			}*/

			    			
						});   
				}); 

			});
		}
});