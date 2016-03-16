@extends('template.main')

@section('title','Configurar Materia')

@section('content')

{!! Form::open(array('route' => ['config.materia_configs.update',$materia_config->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			{!! Form::label('institucion_config_id','Institucion/Grado/Sección') !!}
			{!! Form::select('institucion_config_id',$institucion_configs, $materia_config->institucion_config_id, ['class' => 'form-control  select-tag', 'required'] ) !!}

		</div>

		<div class="form-group">
			{!! Form::label('materia_id','Materia') !!}
			{!! Form::select('materia_id',$materias, $materia_config->materia_id, ['class' => 'form-control  select-tag', 'required'] ) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('activo','Activa ?') !!}
			{!! Form::checkbox('activo', 1, $materia_config->activo); !!}
		</div>
		    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	


@endsection


@section('js') 

	<script> 
		$('.select-tag').chosen({ 
			placeholder_text_multiple: 'Seleccione...', 
			no_results_text: 'No se encontraron resultados' 
		}); 
	</script> 

@endsection