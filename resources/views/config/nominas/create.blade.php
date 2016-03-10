@extends('template.main')

@section('title','Crear Nómina')

@section('content')

{!! Form::open(array('route' => 'config.nominas.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('nomina','Nómina') !!}
			{!! Form::text('nomina',null, ['class' => 'form-control', 'placeholder' => 'Nómina', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

	

@endsection