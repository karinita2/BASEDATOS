@extends('template.main')

@section('title','Listar Instituciones')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.instituciones.create') }}" class="btn btn-primary">Registrar Institución</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Institución</th>
			<th>Dirección</th>
			<th>Teléfono</th>
		</thead>
		<tbody>
			@foreach ($instituciones as $institucion)
				<tr>
					<td>{{ $institucion->id }}</td>
					<td>{{ $institucion->institucion }}</td>
					<td>{{ $institucion->direccion }}</td>
					<td>{{ $institucion->telefono }}</td>
				    <td><a href="{{ route('config.instituciones.edit', $institucion->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				   
                     <a href="{{ route('config.instituciones.destroy', $institucion->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la institucion?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>



			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $instituciones->render() }}
	</div>

@endsection

