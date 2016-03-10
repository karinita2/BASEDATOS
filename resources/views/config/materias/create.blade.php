@extends('template.main')

@section('title','Crear Materia')

@section('content')

{!! Form::open(array('route' => 'config.materias.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('materia','Materia') !!}
			{!! Form::text('materia',null, ['class' => 'form-control', 'placeholder' => 'Materia', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

	

@endsection