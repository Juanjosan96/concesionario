<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>a modificar!</h1>
  <form action="{{route('coche.actualizar',$datos)}}" method="POST">
    @csrf
    @method('put')
    {{$datos}};
    <label>Nombre:
      <input type="text" name="nombre" value="{{$datos->nombre}}">
    </label>
    <label>marca:
      <input type="text" name="marca">
    </label>
    <label >modelo:
      <input type="text" name="modelo">
    </label>
    <label >año:
      <input type="text" name="anio">
    </label>
    <label>matricula:
      <input type="text" name="matricula">
    </label>
    <label>color:
      <input type="text" name="color">
    </label>
    <label>descripcion:
      <input type="text" name="descripcion">
    </label>
    <label>imagen:
      <input type="file" name="imagen" class="hidden">
    </label>
    <button type="submit">Enviar</button>
    
  </form>

</body>
</html>