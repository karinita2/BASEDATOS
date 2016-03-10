@extends('template.main')

@section('title','Crear Sección')

@section('content')

{!! Form::open(array('route' => 'config.secciones.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('seccion','Sección') !!}
			{!! Form::text('seccion',null, ['class' => 'form-control', 'placeholder' => 'Sección', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

	

@endsection