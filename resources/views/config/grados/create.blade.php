@extends('template.main')

@section('title','Crear Grado')

@section('content')

{!! Form::open(array('route' => 'config.grados.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('grado','Grado') !!}
			{!! Form::text('grado',null, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

@endsection