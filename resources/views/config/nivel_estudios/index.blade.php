@extends('template.main')

@section('title','Listar Niveles de Estudio')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.nivel_estudios.create') }}" class="btn btn-primary">Registrar Niveles de Estudio</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Ruta</th>
		</thead>
		<tbody>
			@foreach ($nivel_estudios as $nivel_estudio)
				<tr>
					<td>{{ $nivel_estudio->id }}</td>
					<td>{{ $nivel_estudio->nivel }}</td>
				    <td><a href="{{ route('config.nivel_estudios.edit', $nivel_estudio->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.nivel_estudios.destroy', $nivel_estudio->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar el nivel de estudio?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $nivel_estudios->render() }}
	</div>

@endsection