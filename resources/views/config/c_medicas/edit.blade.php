@extends('template.main')

@section('title','Editar Condición Médica: '.$c_medica->c_medica)

@section('content')

{!! Form::open(array('route' => ['config.c_medicas.update',$c_medica->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('c_medica','Condición Médica') !!}
			
			{!! Form::text('c_medica',$c_medica->c_medica, ['class' => 'form-control', 'placeholder' => 'Condición Médica', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

	
@endsection