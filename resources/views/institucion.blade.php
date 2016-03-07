{{ $instituciones->find(2)->institucion }}

<h1>
@foreach ($instituciones->find(2)->grados as $grado)
    
    {{ $grado->grado }}

@endforeach
</h1>




