{{ $grados->find(1)->grado }}

<h1>
@foreach ($grados->find(1)->secciones as $seccion)
    
    {{ $seccion->seccion }}

@endforeach
</h1>




