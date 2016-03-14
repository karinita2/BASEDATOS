@extends('template.main')

@section('title','Configuración de Institución')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.instituciones_conf.create') }}" class="btn btn-primary">Añadir Configuración</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Materia</th>
			<th>Sección</th>
			<th>Grado</th>
			<th>Institución</th>
		</thead>
		<tbody>
			@foreach ($institucion_configs as $institucion_config)
				<tr>
					<td>{{ $institucion_config->id }}</td>
					<td>{{ $institucion_config->materia->materia }}</td>
					<td>{{ $institucion_config->seccion->seccion }}</td>
					<td>{{ $institucion_config->grado->grado }}</td>
					<td>{{ $institucion_config->institucion->institucion }}</td>

				    <td><a href="{{ route('config.instituciones_conf.edit', $institucion_config->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				   
                     <a href="{{ route('config.instituciones_conf.destroy', $institucion_config->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la institucion?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>



			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $institucion_configs->render() }}
	</div>

@endsection