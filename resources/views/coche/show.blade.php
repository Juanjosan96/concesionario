
@extends('layouts.plantilla')

@section('titulo','Resultado')
@section('contenido')

<h1>Resultados aqui! {{$datos->name}} </h1>
<a href="{{route('coche.index')}}">Volver</a>
<p>El coche es un {{$datos->nombre}}</p>
{{$datos->imagen}}
<a href="{{route('coche.edit',$datos)}}">Editar</a>
  <div name="contenedor">
  <img src="/img/{{$datos->imagen}} "alt="La imagen no ha cargado correctamente"width='30%'> 
</div>


<form action="{{route('coche.destroy',$datos)}}" method="POST">
  @csrf
  @method('delete')
    <button type="submit">Eliminar</button>
</form>

@endsection




