@extends('layouts.plantilla')

@section('titulo','Editar')
{{-- @section('formulario') --}}

@section('contenido')
<h1>a modificar!</h1>
<section class="stark-login">
<form action="{{route('coche.update',$datos)}}" method="POST">
  <div id="fade-box">
  @csrf
  @method('put')
  {{$datos->imagen}}
  {{-- @section('prueba') --}}
      <input type="text" name="nombre" id="nombre" placeholder="nombre" required value="{{$datos->nombre}}">
      <input type="text" name="marca" id="marca" placeholder="marca" required value="{{$datos->marca}}">
      <input type="text" name="modelo" id="modelo" placeholder="modelo" required value="{{$datos->modelo}}">
      <input type="number" name="anio" id="anio" placeholder="año" required value="{{$datos->anio}}">
      <input type="text" name="matricula" id="matricula" placeholder="matricula" required value="{{$datos->matricula}}">
      <input type="text" name="color" id="color" placeholder="color" required value="{{$datos->color}}">
      <input type="text" name="descripcion" id="descripcion" placeholder="descripcion" required value="{{$datos->descripcion}}">
      <input type="file" name="imagen" class="hidden"value="{{$datos->imagen}}">
      <button><a href="{{route('coche.index')}}">Mandar</a></button>
    </form>

  </div>
</section>        
      
                </main>

                @section('ultimos')
                {{-- <li>{{$datos[0]->nombre}} de {{$datos[0]->anio}}</li>
                <li>{{$datos[1]->nombre}} de {{$datos[1]->anio}}</li>
                <li>{{$datos[2]->nombre}} de {{$datos[2]->anio}}</li>
                <li>{{$datos[3]->nombre}} de {{$datos[3]->anio}}</li>
                <li>{{$datos[4]->nombre}} de {{$datos[4]->anio}}</li>
                <li>{{$datos[5]->nombre}} de {{$datos[5]->anio}}</li> --}}
@endsection
      @endsection

     
        









  {{-- <label>Nombre:
    <input type="text" name="nombre" value="{{$datos->nombre}}">
  </label>
  <label>marca:
    <input type="text" name="marca"value="{{$datos->marca}}">
  </label>
  <label >modelo:
    <input type="text" name="modelo"value="{{$datos->modelo}}">
  </label>
  <label >año:
    <input type="text" name="anio"value="{{$datos->anio}}">
  </label>
  <label>matricula:
    <input type="text" name="matricula"value="{{$datos->matricula}}">
  </label>
  <label>color:
    <input type="text" name="color"value="{{$datos->color}}">
  </label>
  <label>descripcion:
    <input type="text" name="descripcion"value="{{$datos->descripcion}}">
  </label>
  <label>imagen:
    <input type="file" name="imagen" class="hidden"value="{{$datos->imagen}}">
  </label>
  <button type="submit">Enviar</button> --}}
  
{{-- </form> --}}
{{-- @endsection --}}






  