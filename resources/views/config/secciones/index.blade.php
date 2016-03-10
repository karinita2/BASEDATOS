@extends('template.main')

@section('title','Listar Secciones')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.secciones.create') }}" class="btn btn-primary">Registrar Sección</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Sección</th>
		</thead>
		<tbody>
			@foreach ($secciones as $seccion)
				<tr>
					<td>{{ $seccion->id }}</td>
					<td>{{ $seccion->seccion }}</td>
				    <td><a href="{{ route('config.secciones.edit', $seccion->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.secciones.destroy', $seccion->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la sección?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $secciones->render() }}
	</div>

@endsection