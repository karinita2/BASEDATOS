@extends('template.main')

@section('title','Permisos')

@section('content')
	
	<div align="right"> 
		<a href="{{ route('config.permisos.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Docente</a>
	</div>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Cédula</th>
			<th>Nombres y Apellidos</th>
			<th>Roles</th>

		</thead>
		<tbody>
			@foreach ($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->id  }}</td>
					<td>{{ $usuario->cedula }}</td>
					<td>{{ $usuario->nombre1 . " ". $usuario->nombre2 . " ". $usuario->apellido1. " ".$usuario->apellido2   }}</td>
					
					<td>
						@foreach ($usuario->roles as $rol)
							@if($rol->id==1)
								<span class="label label-primary">{{ $rol->rol   }}</span>
							@elseif ($rol->id==2)
								<span class="label label-success">{{ $rol->rol   }}</span>
							@elseif ($rol->id==3)
								<span class="label label-info">{{ $rol->rol   }}</span>
							@elseif ($rol->id==4)
								<span class="label label-warning">{{ $rol->rol   }}</span>
							@elseif ($rol->id==5)
								<span class="label label-danger">{{ $rol->rol   }}</span>
							@elseif ($rol->id==6)
								<span class="label label-default">{{ $rol->rol   }}</span>
							@endif
						@endforeach
					</td>
			

					@if(isset($usuario->fotoCarnet()->nombre))
						<td>{!! Html::image(asset("/images/users/".$usuario->fotoCarnet()->nombre),'Subir Foto',array('class' => 'img-rounded idImg',
							'id'=>'idImg', 'width' => '100px', 'height' => '80px')) !!}</td>
					
					@else 
						<td>{!! Html::image(asset("images/sin-foto.gif"),'Subir Foto',array('class' => 'img-rounded idImg',
							'id'=>'idImg', 'width' => '100px', 'height' => '80px')) !!}</td>
					@endif
				    <td><a href="{{ route('config.permisos.edit', $usuario->id ) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden= "true"></span></a>

			        </td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<div align="center"> 
		{{ $usuarios->render() }}
	</div>

@endsection