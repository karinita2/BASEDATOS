@extends('template.main')

@section('title','Editar Institucion: '.$institucion->institucion)

@section('content')

{!! Form::open(array('route' => ['config.instituciones.update',$institucion], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('institucion','Institucion') !!}
			{!! Form::text('institucion',$institucion->institucion, ['class' => 'form-control', 'placeholder' => 'Institucion', 'required'] ) !!}

		</div>

		<div class="form-group">
			{!! Form::label('grado_id','Grados') !!}
			{!! Form::select('grado_id[]',$grados, $my_grados, ['class' => 'form-control  select-tag', 'multiple', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

@endsection

@section('js')

	<script>
		$('.select-tag').chosen({
			placeholder_text_multiple: 'Seleccione los grados asociados',
			no_results_text: 'No se encontraron resultados' 
		});
	</script>

@endsection