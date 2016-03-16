@extends('template.main')

@section('title','Configurar Materia')

@section('content')

{!! Form::open(array('route' => 'config.materia_configs.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('institucion_config_id','Institucion/Grado/Sección') !!}
			{!! Form::select('institucion_config_id',$institucion_configs, null, ['class' => 'form-control  select-tag', 'required'] ) !!}

		</div>

		<div class="form-group">
			{!! Form::label('materia_id','Materia') !!}
			{!! Form::select('materia_id',$materias, null, ['class' => 'form-control  select-tag', 'required'] ) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('activo','Activa ?') !!}
			{!! Form::checkbox('activo', 1); !!}
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