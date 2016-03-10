@extends('template.main')

@section('title','Listar Actividades')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.actividades.create') }}" class="btn btn-primary">Registrar Actividades</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Actividad</th>
		</thead>
		<tbody>
			@foreach ($actividades as $actividad)
				<tr>
					<td>{{ $actividad->id }}</td>
					<td>{{ $actividad->actividad }}</td>
				    <td><a href="{{ route('config.actividades.edit', $actividad->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.actividades.destroy', $actividad->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la actividad?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $actividades->render() }}
	</div>

@endsection