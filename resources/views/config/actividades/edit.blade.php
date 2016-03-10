@extends('template.main')

@section('title','Editar Actividad: '.$actividad->actividad)

@section('content')

{!! Form::open(array('route' => ['config.actividades.update',$actividad->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('actividad','Actividad') !!}
			
			{!! Form::text('actividad',$actividad->actividad, ['class' => 'form-control', 'placeholder' => 'Actividad', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

	
@endsection