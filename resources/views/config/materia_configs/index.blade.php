@extends('template.main')

@section('title','Configuración de Materias')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.materia_configs.create') }}" class="btn btn-primary">Añadir Configuración</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Institución</th>
			<th>Grado</th>
			<th>Sección</th>
			<th>Materia</th>
		</thead>
		<tbody>
			@foreach ($materia_configs as $materia_config)
				<tr>
					<td>{{ $materia_config->id }}</td>
					<td>{{ $materia_config->institucion_config->institucion->institucion  }}</td>
					<td>{{ $materia_config->institucion_config->grado->grado  }}</td>
					<td>{{ $materia_config->institucion_config->seccion->seccion  }}</td>					
					<td>{{ $materia_config->materia->materia  }}</td>

				    <td><a href="{{ route('config.materia_configs.edit', $materia_config->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				   
                     <a href="{{ route('config.materia_configs.destroy', $materia_config->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la configuración?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>



			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $materia_configs->render() }}
	</div>

@endsection