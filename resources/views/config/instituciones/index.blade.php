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
		</thead>
		<tbody>
			@foreach ($instituciones as $institucion)
				<tr>
					<td>{{ $institucion->id }}</td>
					<td>{{ $institucion->institucion }}</td>
				    <td><a href="{{ route('config.instituciones.edit', $institucion->id ) }}" class="btn btn-warning">Institución <span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				   
				     <a href="{{ route('config.instituciones.destroy', $institucion->id ) }}" class="btn btn-info" onclick="return confirm('Seguro que desea eliminar la institucion?')">Rutas <span class="glyphicon glyphicon-road" aria-hidden= "true"></span> </a>


					<a href="{{ route('config.instituciones.destroy', $institucion->id ) }}" class="btn btn-primary" onclick="return confirm('Seguro que desea eliminar la institucion?')">Grados <span class="glyphicon glyphicon-book" aria-hidden= "true"></span> </a>

					<a href="{{ route('config.instituciones.destroy', $institucion->id ) }}" class="btn btn-success" onclick="return confirm('Seguro que desea eliminar la institucion?')">Secciones <span class="glyphicon glyphicon-th-large" aria-hidden= "true"></span> </a>

					<a href="{{ route('config.instituciones.destroy', $institucion->id ) }}" class="btn btn-primary" onclick="return confirm('Seguro que desea eliminar la institucion?')">Materias <span class="glyphicon glyphicon-th" aria-hidden= "true"></span> </a>


                     <a href="{{ route('config.instituciones.destroy', $institucion->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la institucion?')">Eliminar <span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>



			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $instituciones->render() }}
	</div>

@endsection

