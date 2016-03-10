@extends('template.main')

@section('title','Crear Filial')

@section('content')

{!! Form::open(array('route' => 'config.filiales.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('filial','Filial') !!}
			{!! Form::text('filial',null, ['class' => 'form-control', 'placeholder' => 'Filial', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

@endsection