@extends('layouts.plantilla')

@section('titulo','Crear')
@section('contenido')
{{-- @section('formulario') --}}
<h1>a crear!</h1>
{{-- <form action="{{route('coche.store')}}" method="POST">
  @csrf
  {{route('coche.create')}};
  @section('prueba')
  <input type="text" name="nombre" placeholder="Nombre" required >
  <input type="text" name="marca" placeholder="Marca" required >
  <input type="text" name="modelo" placeholder="Modelo" required >
  <input type="text" name="anio"  placeholder="Año" required >
  <input type="text" name="matricula" placeholder="Matricula" required >
  <input type="text" name="color"  placeholder="Color" required >
  <input type="text" name="descripcion" placeholder="Descripcion" required >
    <input type="file" name="imagen" class="hidden"required>
  <button><a href="{{route('coche.index')}}">Mandar</a></button>
</form> --}}






<section class="stark-login">
  <form action="{{route('coche.store')}}" method="POST">
  {{-- <form action="" method="">	 --}}
    <div id="fade-box">
     
        @csrf
      {{-- @yield('prueba') --}}
      <input type="text" name="nombre" placeholder="Nombre" required >
      <input type="text" name="marca" placeholder="Marca" required >
      <input type="text" name="modelo" placeholder="Modelo" required >
      <input type="number" name="anio"  placeholder="Año" required >
      <input type="text" name="matricula" placeholder="Matricula" required >
      <input type="text" name="color"  placeholder="Color" required >
      <input type="text" name="descripcion" placeholder="Descripcion" required >
        <input type="file" name="imagen" class="hidden"required>
      <button><a href="{{route('coche.store')}}">Mandar aqui</a></button>

    </form>
{{-- <button><a href="{{route('coche.index')}}">Mandar</a></button> --}}
          {{-- <button>Enviar</button>  --}}

   </div>
      {{-- </form> --}}
            
    </section>        

          </main>





  {{-- @endsection --}}
  {{-- <label>Nombre:
    <input type="text" name="nombre" required>
  </label>
  <label>marca:
    <input type="text" name="marca"required>
  </label>
  <label >modelo:
    <input type="text" name="modelo"required>
  </label>
  <label >año:
    <input type="text" name="anio"required>
  </label>
  <label>matricula:
    <input type="text" name="matricula"required>
  </label>
  <label>color:
    <input type="text" name="color"required>
  </label>
  <label>descripcion:
    <input type="text" name="descripcion"required>
  </label>
  <label>imagen:
    <input type="file" name="imagen" class="hidden"required>
  </label>
  <button type="submit">Enviar</button> --}}
  


@endsection