@extends('template.main')

@section('title','Editar Talla: '.$talla->talla)

@section('content')

{!! Form::open(array('route' => ['config.tallas.update',$talla->id], 'method' => 'PUT')) !!}
    
	    <div class="form-group">
			
			{!! Form::label('talla','Talla') !!}
			
			{!! Form::text('talla',$talla->talla, ['class' => 'form-control', 'placeholder' => 'Talla', 'required'] ) !!}

		</div>
	    
	    <div class="form-group">

			{!! Form::submit('Editar', array('class' => 'btn btn-primary')) !!}
		
		</div>

{!! Form::close() !!}	

@endsection