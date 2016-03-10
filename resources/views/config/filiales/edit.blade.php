@extends('template.main')

@section('title','Editar Filial: '.$filial->filial)

@section('content')

{!! Form::open(array('route' => ['config.filiales.update',$filial->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('filial','Filial') !!}
			
			{!! Form::text('filial',$filial->filial, ['class' => 'form-control', 'placeholder' => 'Filial', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

	
@endsection