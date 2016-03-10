@extends('template.main')

@section('title','Listar Condiciones Médicas')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.c_medicas.create') }}" class="btn btn-primary">Registrar Condiciones Médicas</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Condición Médica</th>
		</thead>
		<tbody>
			@foreach ($c_medicas as $c_medica)
				<tr>
					<td>{{ $c_medica->id }}</td>
					<td>{{ $c_medica->c_medica }}</td>
				    <td><a href="{{ route('config.c_medicas.edit', $c_medica->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.c_medicas.destroy', $c_medica->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la condición médica?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $c_medicas->render() }}
	</div>

@endsection