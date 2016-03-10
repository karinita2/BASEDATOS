@extends('template.main')

@section('title','Listar Nóminas')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.nominas.create') }}" class="btn btn-primary">Registrar Nóminas</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nómina</th>
		</thead>
		<tbody>
			@foreach ($nominas as $nomina)
				<tr>
					<td>{{ $nomina->id }}</td>
					<td>{{ $nomina->nomina }}</td>
				    <td><a href="{{ route('config.nominas.edit', $nomina->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.nominas.destroy', $nomina->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la nómina?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $nominas->render() }}
	</div>

@endsection