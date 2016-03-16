@extends('template.main')

@section('title','Registrar Docente')

@section('content')

{!! Form::open(array('route' => 'config.grados.store', 'method' => 'POST')) !!}
    
    <img src="{{ asset('images/sin-foto.gif') }}" width="140" height="300" class="img-thumbnail">

	    <div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('grado','Nacionalidad') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Estado Civil') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Correo Electrónico') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Cédula') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Dirección de Habitación') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Profesión u Oficio') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Primer Apellido') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Estado') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Nivel de Estudios') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		</div>

 		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Segundo Apellido') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Municipio') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Lugar de Trabajo') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Primer Nombre') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Parroquia') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Filial') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Segundo Nombre') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Teléfono Habitación') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Nómina') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Fecha Nacimiento') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Teléfono Celular') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		 <div class="form-group">
					{!! Form::label('grado','Departamento') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		</div>
	    
	    <div class="row">
		  <div class="col-xs-3">
		   
		  	    <div class="form-group">
					{!! Form::label('cedula','Edad') !!}
					{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
				</div>
		  </div>
		  <div class="col-xs-3">
		   		  <div class="form-group">
					{!! Form::label('grado','Teléfono Trabajo') !!}
					{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
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

{!! Form::close() !!}	

@endsection