@extends('template.main')

@section('title','Listar Rutas Escolares')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.rutas.create') }}" class="btn btn-primary">Registrar Rutas Escolares</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Ruta</th>
			<th>Institución</th>
		</thead>
		<tbody>
			@foreach ($rutas as $ruta)
				<tr>
					<td>{{ $ruta->id }}</td>
					<td>{{ $ruta->ruta }}</td>
					<td>{{ $ruta->institucion->institucion }}</td>
				    <td><a href="{{ route('config.rutas.edit', $ruta->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.rutas.destroy', $ruta->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la ruta escolar?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $rutas->render() }}
	</div>

@endsection