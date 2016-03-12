@extends('template.main')

@section('title','Listar Grados')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.grados.create') }}" class="btn btn-primary">Registrar Grado</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Grado</th>
			<th>Institución</th>
		</thead>
		<tbody>
			@foreach ($grados as $grado)
				<tr>
					<td>{{ $grado->id }}</td>
					<td>{{ $grado->grado }}</td>
					<td>{{ $ruta->institucion->institucion }}</td>
				    <td><a href="{{ route('config.grados.edit', $grado->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.grados.destroy', $grado->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar el grado?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $grados->render() }}
	</div>

@endsection