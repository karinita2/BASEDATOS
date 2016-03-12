@extends('template.main')

@section('title','Editar Ruta Escolar: '.$ruta->ruta)

@section('content')

{!! Form::open(array('route' => ['config.rutas.update',$ruta->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			{!! Form::label('ruta','Ruta') !!}
			{!! Form::text('ruta',$ruta->ruta, ['class' => 'form-control', 'placeholder' => 'Ruta', 'required'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('institucion_id','Institucion') !!}
			{!! Form::select('institucion_id',$instituciones, $ruta->institucion_id, ['class' => 'form-control  select-tag', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

	

@endsection