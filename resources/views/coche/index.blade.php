
{{-- aqui se muestran los coches --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <a href="{{route('coche.pata')}}">Registrar coche</a>
  <h1>Bienvenido a la pagina principal</h1>
  @foreach ($coches as $resultado)
      <li>
      <a href="{{route('coche.show',$resultado->id)}}">{{$resultado->nombre}}</a>
      </li>

  @endforeach
  {{$coches->links()}}
</body>
</html>