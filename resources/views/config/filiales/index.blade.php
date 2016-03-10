@extends('template.main')

@section('title','Listar Filiales')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.filiales.create') }}" class="btn btn-primary">Registrar Filial</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Filial</th>
		</thead>
		<tbody>
			@foreach ($filiales as $filial)
				<tr>
					<td>{{ $filial->id }}</td>
					<td>{{ $filial->filial }}</td>
				    <td><a href="{{ route('config.filiales.edit', $filial->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.filiales.destroy', $filial->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la filial?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $filiales->render() }}
	</div>

@endsection