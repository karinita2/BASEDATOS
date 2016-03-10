@extends('template.main')

@section('title','Editar Sección: '.$seccion->seccion)

@section('content')

{!! Form::open(array('route' => ['config.secciones.update',$seccion->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('seccion','Sección') !!}
			
			{!! Form::text('seccion',$seccion->seccion, ['class' => 'form-control', 'placeholder' => 'Sección', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

@endsection