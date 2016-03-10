@extends('template.main')

@section('title','Crear Actividad')

@section('content')

{!! Form::open(array('route' => 'config.actividades.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('actividad','Actividad') !!}
			{!! Form::text('actividad',null, ['class' => 'form-control', 'placeholder' => 'Actividad', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

@endsection