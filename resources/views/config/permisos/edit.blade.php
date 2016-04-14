@extends('template.main')

@section('title','Asignar Permisos')

@section('content')

{!! Form::open(array('route' => ['config.permisos.update',$usuario->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			{!! Form::label('fullName','Usuario') !!}
			{!! Form::text('fullName',$usuario->cedula. " | ". $usuario->apellido1." ".$usuario->apellido2. ", ". $usuario->nombre1." ".$usuario->nombre2 , ['class' => 'form-control', 'placeholder' => '', 'required', 'readonly', 'tabindex'=>'4']) !!} 
		</div>

		<div class="form-group">
			 {!! Form::label('roles','Roles') !!}
			 {!! Form::select('rol_id[]',$roles, $my_roles, ['class' => 'form-control  select-tag2', 'multiple', 'required'] ) !!} 

		</div>
	    
	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	


@endsection


@section('js') 

	<script> 

	$('.select-tag2').chosen({ 
						placeholder_text_multiple: 'Seleccione los roles asociados', 
						no_results_text: 'No se encontraron resultados' 
	}); 


	</script> 

@endsection