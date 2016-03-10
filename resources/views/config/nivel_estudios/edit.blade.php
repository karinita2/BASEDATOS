@extends('template.main')

@section('title','Editar Nivel de Estudio: '.$nivel_estudio->nivel)

@section('content')

{!! Form::open(array('route' => ['config.nivel_estudios.update',$nivel_estudio->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('nivel_estudio','Nivel Estudios') !!}
			
			{!! Form::text('nivel',$nivel_estudio->nivel, ['class' => 'form-control', 'placeholder' => 'Nivel de Estudio', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

@endsection