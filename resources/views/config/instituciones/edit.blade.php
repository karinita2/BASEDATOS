@extends('template.main')

@section('title','Editar Institucion'. $institucion->institucion)

@section('content')

{!! Form::open(array('route' => 'config.instituciones.store', 'method' => 'POST')) !!}
    
	    <div class="form-group">
			{!! Form::label('institucion','Institucion') !!}
			{!! Form::text('institucion',$institucion->institucion, ['class' => 'form-control', 'placeholder' => 'Institucion', 'required'] ) !!}
		</div>

	    <div class="form-group">
			{!! Form::label('direccion','Dirección') !!}
			{!! Form::text('direccion',$institucion->direccion, ['class' => 'form-control', 'placeholder' => 'Dirección', 'required'] ) !!}
		</div>


	    <div class="form-group">
			{!! Form::label('telefono','Teléfono') !!}
			{!! Form::text('telefono',$institucion->telefono, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required'] ) !!}
		</div>

	    <div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::text('email',$institucion->email, ['class' => 'form-control', 'placeholder' => 'Email', 'required'] ) !!}
		</div>

		<!-- Ubicación institución -->
		<div class="form-group">
			{!! Form::label('estado_id','Estado') !!}
			{!! Form::select('estado_id',$estados, null, ['class' => 'form-control  select-tag', 'required', 'id'=>'estado_id'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('municipio_id','Municipio') !!}
			{!! Form::select('municipio_id',['placeholder'=>'Selecciona'], null, ['class' => 'form-control  select-tag', 'required', 'id'=>'municipio_id'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('parroquia_id','Parroquia') !!}
			{!! Form::select('parroquia_id',['placeholder'=>'Selecciona'], null, ['class' => 'form-control  select-tag', 'required', 'id'=>'parroquia_id'] ) !!}
		</div>
		<!-- fin de Ubicación -->

	    <div class="form-group">
			{!! Form::submit('Registrar', array('class' => 'btn btn-primary')) !!}
		</div>

{!! Form::close() !!}	

@endsection

@section('js') 

	<script src="{{ asset('js/dropdownstate.js') }}"></script>

@endsection	
