@extends('template.main')

@section('title','Listar Materias')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.materias.create') }}" class="btn btn-primary">Registrar Materia</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Materia</th>
		</thead>
		<tbody>
			@foreach ($materias as $materia)
				<tr>
					<td>{{ $materia->id }}</td>
					<td>{{ $materia->materia }}</td>
				    <td><a href="{{ route('config.materias.edit', $materia->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.materias.destroy', $materia->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la materia?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $materias->render() }}
	</div>

@endsection