@extends('template.main')

@section('title','Registrar Docente')

@section('content')

{!! Form::open(array('route' => 'registro.docentes.store', 'method' => 'POST')) !!}
    
    <img src="{{ asset('images/sin-foto.gif') }}" width="140" height="300" class="img-thumbnail">

	    <div class="row">
		  <div class="col-xs-3">
		   	    <div class="form-group">
					{!! Form::label('nacionalidad','Nacionalidad') !!}
					{!! Form::select('nacionalidad', array('V' => 'Venezolano', 'E' => 'Extrangero'), 'V',  ['class' => 'form-control  select-tag', 'required']) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('sexo','Estado Civil') !!}
					{!! Form::select('sexo', array('M' => 'Masculino', 'F' => 'Femenino'), 'S',  ['class' => 'form-control  select-tag', 'required']) !!}	
				  </div>

		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('telefono_trabajo','Teléfono Trabajo') !!}
					{!! Form::text('telefono_trabajo',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Trabajo', 'required'] ) !!}
				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Cédula') !!}
					{!! Form::number('cedula',null, ['class' => 'form-control', 'placeholder' => 'Cédula', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
				{!! Form::label('edo_civil','Estado Civil') !!}
					{!! Form::select('edo_civil', array('S' => 'Soltero', 'C' => 'Casado', 'D' => 'Divorciado', 'CC' => 'Concubino'), 'S',  ['class' => 'form-control  select-tag', 'required']) !!}	
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('email','Correo Electrónico') !!}

					{!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico', 'required'] ) !!}
				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('apellido1','Primer Apellido') !!}
					{!! Form::text('apellido1',null, ['class' => 'form-control', 'placeholder' => 'Primer Apellido', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('direccion','Dirección de Habitación') !!}
					{!! Form::text('direccion',null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required'] ) !!}
					</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('profesion','Profesión u Oficio') !!}
					{!! Form::text('profesion',null, ['class' => 'form-control', 'placeholder' => 'Profesión u Oficio', 'required'] ) !!}
				

				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('apellido2','Segundo Apellido') !!}
					{!! Form::text('apellido2',null, ['class' => 'form-control', 'placeholder' => 'Segundo Apellido', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('estado_id','Estado') !!}
					{!! Form::select('estado_id',$estados, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'estado_id'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('nivel_estudio_id','Nivel de Estudios') !!}
					{!! Form::select('nivel_estudio_id',$nivel_estudios, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'nivel_estudio_id'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('nombre1','Primer Nombre') !!}
					{!! Form::text('nombre1',null, ['class' => 'form-control', 'placeholder' => 'Primer Nombre', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('municipio_id','Municipio') !!}
					{!! Form::select('municipio_id',['placeholder'=>'Selecciona'], null, ['class' => 'form-control  select-tag', 'required', 'id'=>'municipio_id'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('lugar_trabajo','Lugar de Trabajo') !!}
					{!! Form::text('lugar_trabajo',null, ['class' => 'form-control', 'placeholder' => 'Lugar de Trabajo', 'required'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('nombre2','Segundo Nombre') !!}
					{!! Form::text('nombre2',null, ['class' => 'form-control', 'placeholder' => 'Segundo Nombre', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('parroquia_id','Parroquia') !!}
					{!! Form::select('parroquia_id',['placeholder'=>'Selecciona'], null, ['class' => 'form-control  select-tag', 'required', 'id'=>'parroquia_id'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('filial_id','Filial') !!}
					{!! Form::select('filial_id',$filiales, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'filial_id'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('fe_nac','Fecha Nacimiento') !!}
					
					{!! Form::text('fe_nac',null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha Nacimiento', 'required', 'id'=>'fe_nac'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('telefono_hab','Teléfono Habitación') !!}
					{!! Form::text('telefono_hab',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Habitación', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('nomina_id','Nómina') !!}
					{!! Form::select('nomina_id',$nominas, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'nomina_id'] ) !!}
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
					{!! Form::text('telefono_cel',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Celular', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('departamento','Departamento') !!}
					{!! Form::text('departamento',null, ['class' => 'form-control', 'placeholder' => 'Departamento', 'required'] ) !!}
				</div>
		  </div>
		</div>


	    <div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('lugar_nacimiento','Lugar de Nacimiento') !!}
					{!! Form::text('lugar_nacimiento',null, ['class' => 'form-control', 'placeholder' => 'Lugar de Nacimiento', 'required'] ) !!}
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


	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>
<br>
<br>
<br>
<br>
<br>
<br>
{!! Form::close() !!}	

@endsection

@section('js') 

	<script src="{{ asset('js/dropdownstate.js') }}"></script>
	<script >
		$('.datepicker').datepicker({
			format: 'dd/mm/yyyy',
		}).on('changeDate', function (ev) {
			 $.get('/registro/docentes/'+ $("#fe_nac").val().replace(/\//g,"-") +'/getEdad', function(response, state){

				$("#edad").val(response);
			});
		});
	</script>

@endsection	







