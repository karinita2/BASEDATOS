@extends('template.main')

@section('title','Crear Institucion')

@section('content')

	

{{ dd(Session::get('errors')) }}


{!! Form::open(array('route' => 'config.instituciones.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('institucion','Institucion') !!}
			{!! Form::text('institucion',null, ['class' => 'form-control', 'placeholder' => 'Institucion', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

	

@endsection