@extends('template.main')

@section('title','Listado de Docentes')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('registro.docentes.create') }}" class="btn btn-primary">Registrar Docente</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Cédula</th>
			<th>Nombres</th>
			<th>Apellidos</th>

		</thead>
		<tbody>
			@foreach ($docentes as $docente)
				<tr>
					<td>{{ $docente->id  }}</td>
					<td>{{ $docente->trabajador->user->cedula }}</td>
					<td>{{ $docente->trabajador->user->nombre1 . " ". $docente->trabajador->user->nombre2  }}</td>
					<td>{{ $docente->trabajador->user->apellido1. " ".$docente->trabajador->user->apellido2  }}</td>
					@if(isset($docente->trabajador->user->imagens->first()->nombre))
					<td>{!! Html::image(asset("/images/users/".$docente->trabajador->user->imagens->first()->nombre),'Subir Foto',array('class' => 'img-rounded idImg',
						'id'=>'idImg', 'width' => '140px', 'height' => '120px')) !!}</td>
					
					@else 
					<td>{!! Html::image(asset("images/sin-foto.gif"),'Subir Foto',array('class' => 'img-rounded idImg',
						'id'=>'idImg', 'width' => '140px', 'height' => '120px')) !!}</td>
					@endif
				    <td><a href="{{ route('registro.docentes.edit', $docente->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				   
                     <a href="{{ route('registro.docentes.destroy', $docente->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la configuración?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>



			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $docentes->render() }}
	</div>

@endsection