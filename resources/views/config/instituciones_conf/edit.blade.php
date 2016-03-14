@extends('template.main')

@section('title','Configurar Institucion')

@section('content')

{!! Form::open(array('route' => 'config.instituciones_conf.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('institucion_id','Institucion') !!}
			{!! Form::select('institucion_id',$instituciones, $institucion_config->institucion_id, ['class' => 'form-control  select-tag', 'required'] ) !!}

		</div>

		<div class="form-group">
			{!! Form::label('grado_id','Grado') !!}
			{!! Form::select('grado_id',$grados, $institucion_config->grado_id, ['class' => 'form-control  select-tag', 'required'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('seccion_id','Sección') !!}
			{!! Form::select('seccion_id',$secciones, $institucion_config->seccion_id, ['class' => 'form-control  select-tag', 'required'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('materia_id','Materia') !!}
			{!! Form::select('materia_id',$materias, $institucion_config->materia_id, ['class' => 'form-control  select-tag', 'required'] ) !!}
		</div>

		    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	


@endsection


@section('js') 

	<script> 
		$('.select-tag').chosen({ 
			placeholder_text_multiple: 'Seleccione las materias asociadas', 
			no_results_text: 'No se encontraron resultados' 
		}); 
	</script> 

@endsection