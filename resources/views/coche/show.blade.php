{{-- poner resultados aqui --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Resultados aqui! {{$datos->name}} </h1>
  <a href="{{route('coche.index')}}">Volver</a>
  <p>El coche es un {{$datos->nombre}}</p>
  <a href="{{route('coche.edicion',$datos)}}">Editar</a>
    <div name="contenedor">
    <img src="/img/{{$datos->imagen}} "alt="imagen aqui"width='30%'> 
  </div>


  <form action="{{route('coche.eliminar',$datos)}}" method="POST">
    @csrf
    @method('delete')
      <button type="submit">Eliminar</button>
  </form>
</body>
</html>