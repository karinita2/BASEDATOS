@extends('template.main')

@section('title','Registrar Docente')

@section('content')
 <div class="col-md-12 col-md-offset-1">
{!! Form::open(array('route' => 'registro.docentes.store', 'method' => 'POST', 'id' => 'docenteForm',  'files' => 'true')) !!}
    
   
   
	    <div class="row">
		  <div class="col-xs-3">
		   	    <div class="form-group">
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
				  </div>

		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
		   		 	 <div class="panel panel-default pull-right" style="width:195px; height:220px;">
						  <div class="panel-body">
						     	{!! Html::image(asset('images/sin-foto.gif'),'Subir Foto',array('class' => 'img-rounded idImg',
						     	'id'=>'idImg', 'width' => '160px', 'height' => '140px','onclick'=>"$('#ruta').click();")) !!}
						     	<!--<img src="{{ asset('images/sin-foto.gif') }}" style="width:160px; height:140px;" > 'style'=>'display:none'-->
						  </div>
						  <div class="panel-footer">
						  		<div  style="text-align:center">
						  			{!! Form::label('foto','Foto') !!}
						 			{!! Form::file('ruta', array('style'=>'display:none','id'=>'ruta', 'accept' => 'image/x-png, image/jpeg')) !!} 		

						  		</div>
						  	
						  </div>
						</div>
				</div>
		  </div>
		</div>

	    <div class="row">
		  <div class="col-xs-3">
		   	    <div class="form-group">
					{!! Form::label('cedula','Cédula') !!}
					{!! Form::number('cedula',null, ['class' => 'form-control', 'placeholder' => 'Cédula', 'required', 'id'=>'cedula','tabindex'=>'1'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('sexo','Género') !!}
					{!! Form::select('sexo', array('M' => 'Masculino', 'F' => 'Femenino'), 'S',  ['class' => 'form-control  select-tag', 'required','placeholder'=>'Selecciona un genero','tabindex'=>'9']) !!}	
				  </div>

		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('telefono_trabajo','Teléfono Trabajo') !!}
					{!! Form::text('telefono_trabajo',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Trabajo', 'required','tabindex'=>'17'] ) !!}
				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
		  	    	{!! Form::label('nacionalidad','Nacionalidad') !!}
					{!! Form::select('nacionalidad', array('V' => 'Venezolano', 'E' => 'Extranjero'), 'V',  ['class' => 'form-control  select-tag', 'required','placeholder'=>'Selecciona la nacionalidad','tabindex'=>'2' ]) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
				{!! Form::label('edo_civil','Estado Civil') !!}
					{!! Form::select('edo_civil', array('S' => 'Soltero', 'C' => 'Casado', 'D' => 'Divorciado', 'CC' => 'Concubino'), null,  ['class' => 'form-control  select-tag', 'required','placeholder'=>'Selecciona el estado civil','tabindex'=>'10']) !!}	
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('email','Correo Electrónico') !!}

					{!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'required','tabindex'=>'18'] ) !!}
				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('apellido1','Primer Apellido') !!}
					{!! Form::text('apellido1',null, ['class' => 'form-control', 'placeholder' => 'Primer Apellido', 'required','tabindex'=>'3'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('direccion','Dirección de Habitación') !!}
					{!! Form::text('direccion',null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required','tabindex'=>'11'] ) !!}
					</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('profesion','Profesión u Oficio') !!}
					{!! Form::text('profesion',null, ['class' => 'form-control', 'placeholder' => 'Profesión u Oficio', 'required','tabindex'=>'19'] ) !!}
				

				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('apellido2','Segundo Apellido') !!}
					{!! Form::text('apellido2',null, ['class' => 'form-control', 'placeholder' => 'Segundo Apellido', 'required','tabindex'=>'4'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('estado_id','Estado') !!}
					{!! Form::select('estado_id',$estados, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'estado_id','placeholder'=>'Selecciona un estado','tabindex'=>'12'] ) !!}
					{!! Form::hidden('estado', null, ['id'=>'estado']) !!} 
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('nivel_estudio_id','Nivel de Estudios') !!}
					{!! Form::select('nivel_estudio_id',$nivel_estudios, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'nivel_estudio_id','placeholder'=>'Selecciona un nivel de estudio','tabindex'=>'20'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('nombre1','Primer Nombre') !!}
					{!! Form::text('nombre1',null, ['class' => 'form-control', 'placeholder' => 'Primer Nombre', 'required','tabindex'=>'5'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('municipio_id','Municipio') !!}
					{!! Form::select('municipio_id',[], null, ['class' => 'form-control  select-tag', 'required', 'id'=>'municipio_id','placeholder'=>'Selecciona un municipio','tabindex'=>'13'] ) !!}
					{!! Form::hidden('municipio', null, ['id'=>'municipio']) !!} 



				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('lugar_trabajo','Lugar de Trabajo') !!}
					{!! Form::text('lugar_trabajo',null, ['class' => 'form-control', 'placeholder' => 'Lugar de Trabajo', 'required','tabindex'=>'21'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('nombre2','Segundo Nombre') !!}
					{!! Form::text('nombre2',null, ['class' => 'form-control', 'placeholder' => 'Segundo Nombre', 'required','tabindex'=>'6'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('parroquia_id','Parroquia') !!}
					{!! Form::select('parroquia_id',[], null, ['class' => 'form-control  select-tag', 'required', 'id'=>'parroquia_id','placeholder'=>'Selecciona una parroquia','tabindex'=>'14'] ) !!}
					{!! Form::hidden('parroquia', null, ['id'=>'parroquia']) !!} 
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('filial_id','Filial') !!}
					{!! Form::select('filial_id',$filiales, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'filial_id','placeholder'=>'Selecciona una filial','tabindex'=>'22'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('fe_nac','Fecha Nacimiento') !!}
					
					{!! Form::text('fe_nac',null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha Nacimiento', 'required', 'id'=>'fe_nac','tabindex'=>'7'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('telefono_hab','Teléfono Habitación') !!}
					{!! Form::text('telefono_hab',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Habitación', 'required','tabindex'=>'15'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('nomina_id','Nómina') !!}
					{!! Form::select('nomina_id',$nominas, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'nomina_id','placeholder'=>'Selecciona una nómina','tabindex'=>'23'] ) !!}
				</div>
		  </div>
		</div>
	    
	    <div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('edad','Edad') !!}
					{!! Form::text('edad',null, ['class' => 'form-control', 'placeholder' => 'Edad', 'required', 'readonly', 'id'=>'edad' ] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('telefono_cel','Teléfono Celular') !!}
					{!! Form::text('telefono_cel',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Celular', 'required','tabindex'=>'16'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('departamento','Departamento') !!}
					{!! Form::text('departamento',null, ['class' => 'form-control', 'placeholder' => 'Departamento', 'required','tabindex'=>'24'] ) !!}
				</div>
		  </div>
		</div>


	    <div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('lugar_nacimiento','Lugar de Nacimiento') !!}
					{!! Form::text('lugar_nacimiento',null, ['class' => 'form-control', 'placeholder' => 'Lugar de Nacimiento', 'required','tabindex'=>'8'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">

				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">

				</div>
		  </div>
		</div>

	    <div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group pull-right">
		   		 		<button type="button" class="btn btn-success" onclick="limpiarFormRegistro('#docenteForm','#idImg');" ><span class="glyphicon glyphicon-retweet" aria-hidden= "true"></span> Limpiar</button>
						{!! Form::button('<span class="glyphicon glyphicon-floppy-disk"></span> Guardar', array('class'=>'btn btn-primary', 'type'=>'submit')) !!}
				</div>
		  </div>
		</div>

<br>
<br>
<br>
<br>
<br>
<br>
{!! Form::close() !!}	
 </div>

@endsection
@section('css')
<style type="text/css">
	.idImg:hover{
	
	cursor:pointer;
	
}
</style> 
@endsection

@section('js') 
	<script src="{{ asset('js/dropdownstate.js') }}"></script>
	<script src="{{ asset('js/dropdowneditstate.js') }}"></script>
	<script src="{{ asset('js/funcionesutilitarias.js') }}"></script>
	<script src="{{ asset('js/registrousuarios.js') }}"></script>
	<script >
	//browseURL('id_input_file','id_imagen')
	browseURL('#ruta','#idImg');

	//para borrar los formularios
	function limpiarFormRegistro(form,img){

	    if(confirm('Seguro que desea limpiar el formulario (borrar los datos)?')){
	        $(img).attr('src',"{{ asset('images/sin-foto.gif') }}");
	        $(form).reset();
	    }
	}
	</script>
@endsection	







