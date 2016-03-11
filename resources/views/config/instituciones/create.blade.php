@extends('template.main')

@section('title','Crear Institucion')

@section('content')

{!! Form::open(array('route' => 'config.instituciones.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('institucion','Institucion') !!}
			{!! Form::text('institucion',null, ['class' => 'form-control', 'placeholder' => 'Institucion', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::label('grado_id','Grados') !!}
			{!! Form::select('grado_id[]',$grados, null, ['class' => 'form-control  select-tag', 'multiple', 'required'] ) !!}
		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
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