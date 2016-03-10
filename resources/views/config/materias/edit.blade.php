@extends('template.main')

@section('title','Editar Materia: '.$materia->materia)

@section('content')

{!! Form::open(array('route' => ['config.materias.update',$materia->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('materia','Materia') !!}
			
			{!! Form::text('materia',$materia->materia, ['class' => 'form-control', 'placeholder' => 'Materia', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

@endsection