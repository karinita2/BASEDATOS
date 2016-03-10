@extends('template.main')

@section('title','Crear Talla')

@section('content')

{!! Form::open(array('route' => 'config.tallas.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('talla','Talla') !!}
			{!! Form::text('talla',null, ['class' => 'form-control', 'placeholder' => 'Talla', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

	

@endsection