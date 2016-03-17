@extends('template.main')

@section('title','Registrar Docente')

@section('content')

{!! Form::open(array('route' => 'config.grados.store', 'method' => 'POST')) !!}
    
    <img src="{{ asset('images/sin-foto.gif') }}" width="140" height="300" class="img-thumbnail">

	    <div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('grado','Nacionalidad') !!}
					{!! Form::select('size', array('V' => 'Venezolano', 'E' => 'Extrangero'), 'V',  ['class' => 'form-control  select-tag', 'required']) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Estado Civil') !!}
					{!! Form::select('size', array('S' => 'Soltero', 'C' => 'Casado', 'D' => 'Divorciado', 'CC' => 'Concubino'), 'S',  ['class' => 'form-control  select-tag', 'required']) !!}				</div>

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
					{!! Form::label('cedula','Cédula') !!}
					{!! Form::number('cedula',null, ['class' => 'form-control', 'placeholder' => 'Cédula', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Dirección de Habitación') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Profesión u Oficio') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Profesión u Oficio', 'required'] ) !!}
				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Primer Apellido') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Primer Apellido', 'required'] ) !!}
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
					{!! Form::label('grado','Nivel de Estudios') !!}
					{!! Form::select('nivel_estudio_id',$nivel_estudios, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'nivel_estudio_id'] ) !!}
				

				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Segundo Apellido') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Segundo Apellido', 'required'] ) !!}
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
					{!! Form::label('grado','Lugar de Trabajo') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Lugar de Trabajo', 'required'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Primer Nombre') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Primer Nombre', 'required'] ) !!}
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
					{!! Form::label('cedula','Segundo Nombre') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Segundo Nombre', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Teléfono Habitación') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Habitación', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Nómina') !!}
					{!! Form::select('nomina_id',$nominas, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'nomina_id'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Fecha Nacimiento') !!}
					
					{!! Form::text('cedula',null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha Nacimiento', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Teléfono Celular') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Celular', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Departamento') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Departamento', 'required'] ) !!}
				</div>
		  </div>
		</div>
	    
	    <div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Edad') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Edad', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Teléfono Trabajo') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Teléfono Trabajo', 'required'] ) !!}
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

		});
	</script>

@endsection	







