@extends('template.main')

@section('title','Editar Nómina: '.$nomina->nomina)

@section('content')

{!! Form::open(array('route' => ['config.nominas.update',$nomina->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('nomina','Nómina') !!}
			
			{!! Form::text('nomina',$nomina->nomina, ['class' => 'form-control', 'placeholder' => 'Nómina', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

@endsection