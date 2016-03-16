@extends('template.main')

@section('title','Editar Institucion: '. $institucion->institucion)

@section('content')

{!! Form::open(array('route' => ['config.instituciones.update', $institucion->id], 'method' => 'PUT')) !!}

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
			{!! Form::select('estado_id',$estados, $institucion->estado_id, ['class' => 'form-control  select-tag', 'required', 'id'=>'estado_id'] ) !!}
			{!! Form::hidden('estado', $institucion->estado_id, ['id'=>'estado']) !!} 
		</div>

		<div class="form-group">
			{!! Form::label('municipio_id','Municipio') !!}
			{!! Form::select('municipio_id',[], null, ['class' => 'form-control  select-tag', 'required', 'id'=>'municipio_id'] ) !!}
			{!! Form::hidden('municipio', $institucion->municipio_id, ['id'=>'municipio']) !!} 
		</div>

		<div class="form-group">
			{!! Form::label('parroquia_id','Parroquia') !!}
			{!! Form::select('parroquia_id',[], null, ['class' => 'form-control  select-tag', 'required', 'id'=>'parroquia_id'] ) !!}
			{!! Form::hidden('parroquia', $institucion->parroquia_id, ['id'=>'parroquia']) !!} 
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
