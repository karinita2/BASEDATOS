@extends('template.main')

@section('title','Crear Ruta Escolar')

@section('content')

{!! Form::open(array('route' => 'config.rutas.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('ruta','Ruta') !!}
			{!! Form::text('ruta',null, ['class' => 'form-control', 'placeholder' => 'Ruta', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

	

@endsection