@extends('template.main')

@section('title','Crear Condición Médica')

@section('content')

{!! Form::open(array('route' => 'config.c_medicas.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('c_medica','Condición Médica') !!}
			{!! Form::text('c_medica',null, ['class' => 'form-control', 'placeholder' => 'Condición Médica', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

@endsection