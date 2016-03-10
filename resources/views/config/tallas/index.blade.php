@extends('template.main')

@section('title','Listar Tallas')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.tallas.create') }}" class="btn btn-primary">Registrar Talla</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Talla</th>
		</thead>
		<tbody>
			@foreach ($tallas as $talla)
				<tr>
					<td>{{ $talla->id }}</td>
					<td>{{ $talla->talla }}</td>
				    <td><a href="{{ route('config.tallas.edit', $talla->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

				    <a href="{{ route('config.tallas.destroy', $talla->id ) }}" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar la talla?')"><span class="glyphicon glyphicon-remove-circle" aria-hidden= "true"></span> </a>
			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $tallas->render() }}
	</div>

@endsection