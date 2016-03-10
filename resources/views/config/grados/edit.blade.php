@extends('template.main')

@section('title','Editar Grado: '.$grado->grado)

@section('content')

{!! Form::open(array('route' => ['config.grados.update',$grado->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('grado','Grado') !!}
			
			{!! Form::text('grado',$grado->grado, ['class' => 'form-control', 'placeholder' => 'Grado', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

	
@endsection