@extends('template.main')

@section('title','Crear Nivel de Estudio')

@section('content')

{!! Form::open(array('route' => 'config.nivel_estudios.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('nivel_estudios','Nivel de Estudio') !!}
			{!! Form::text('nivel',null, ['class' => 'form-control', 'placeholder' => 'Nivel de Estudio', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

	

@endsection