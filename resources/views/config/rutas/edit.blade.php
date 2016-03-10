@extends('template.main')

@section('title','Editar Ruta Escolar: '.$ruta->ruta)

@section('content')

{!! Form::open(array('route' => ['config.rutas.update',$ruta->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('ruta','Ruta Escolar') !!}
			
			{!! Form::text('ruta',$ruta->ruta, ['class' => 'form-control', 'placeholder' => 'Ruta', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

@endsection