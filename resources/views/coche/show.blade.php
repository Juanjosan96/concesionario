
@extends('layouts.plantilla')

@section('titulo','Resultado')
@section('contenido')

{{-- <h1>Resultados aqui! {{$datos->name}} </h1>
<a href="{{route('coche.index')}}">Volver</a>
<p>El coche es un {{$datos->nombre}}</p>
{{$datos->imagen}}
<a href="{{route('coche.edit',$datos)}}">Editar</a>
  <div name="contenedor-aqui" >
  {{-- <img src="/img/{{$datos->imagen}} "alt="La imagen no ha cargado correctamente">  --}}
{{-- </div>  --}}






<main class="blog"style="justify-content: space-around">

  <article class="entrada">
      {{-- {{$datos[0]->imagen}} --}}
      {{-- <img src="img/ {{route('coche.show',$datos[0]->imagen)}}" alt="texto entrada"> --}}
      {{-- <img src="/img/ {{route('coche.show',$datos[0]->imagen)}}" alt="texto entrada"> --}}
      <img src="/img/{{$datos->imagen}} "alt="La imagen no ha cargado correctamente"width='30%'> 
      <div class="contenido" >
        {{-- {{$datos}} --}}
          {{-- <h3>FERRARI TESTAROSSA</h3> --}}
          
          <p>NOMBRE: <span>{{$datos->nombre}}</span></p>
          <p>AÑO: <span>{{$datos->anio}}</span></p>
          <p>MARCA: <span>{{$datos->marca}}</span></p>
          <p>MODELO: <span>{{$datos->modelo}}</span></p>
          <p>MATRICULA: <span>{{$datos->matricula}}</span></p>
          <p>COLOR: <span>{{$datos->color}}</span></p>
          <p>DESCRIPCION: <span>{{$datos->descripcion}}</span></p>
          <form action="{{route('coche.destroy',$datos)}}" method="POST">
            @csrf
            @method('delete')
              <button type="submit" class="boton" style="background-color:red;">Eliminar</button>
              {{-- <a href="" class="boton" style="background-color:red;">Eliminar</a> --}}
          </form>
          <a href="{{route('coche.edit',$datos)}}" class="boton" style="background-color:aqua;">Editar</a>
          <a href="{{route('coche.index')}}" class="boton" style="background-color:pink;">Volver</a>
      </div>
  </article>
  
</main>

@endsection






{{-- 
<style>
  body{
    background-color: aqua;
    color:red;
  }
  .contenedor-aqui{
    width: 500px;
    background-color: aquamarine;
    position: absolute;
    z-index: -1;
    height: 700px;
  }
</style> --}}



