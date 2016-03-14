@extends('template.main')

@section('title','Editar Institucion: '.$institucion->institucion)

@section('content')

{!! Form::open(array('route' => ['config.instituciones.update',$institucion], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('institucion','Institucion') !!}
			{!! Form::text('institucion',$institucion->institucion, ['class' => 'form-control', 'placeholder' => 'Institucion', 'required'] ) !!}

		</div>

    
	    <div class="form-group">
			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

@endsection

