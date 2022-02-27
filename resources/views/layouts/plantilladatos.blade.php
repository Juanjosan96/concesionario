@extends('layouts.plantilla')
@section('contenido')



{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="/css/estilo.css" />
  <link rel="stylesheet" href="/css/formulario.css" />

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  

  <header>
    <div class="hero">
        <img src=" /img/logo.png" alt="logo">

        <div class="nav-hero">
            <a href="#">Inicio</a>
            <a href="#">Nosotros</a>
            <a href="#">Consultas</a>
            <a href="#">Crear/Editar</a>
        </div>

    </div>
    <div class="bienvenida">
        <h1>BIENVENIDOS A CONCESIONARIOS FRAN & JUANJO</h1>
    </div>
</header> --}}

<!--MAIN-->






@yield('formulario')








{{-- <div id="new"> 
  <h1><i> LOGIN TO BIOS</i></h1>
</div>  --}}
<section class="stark-login">
  
  {{-- <form action="" method="">	 --}}
    <div id="fade-box">

      @yield('prueba')
      <input type="text" name="nombre" placeholder="Nombre" required >
      <input type="text" name="marca" placeholder="Marca" required >
      <input type="text" name="modelo" placeholder="Modelo" required >
      <input type="text" name="anio"  placeholder="Año" required >
      <input type="text" name="matricula" placeholder="Matricula" required >
      <input type="text" name="color"  placeholder="Color" required >
      <input type="text" name="descripcion" placeholder="Descripcion" required >
        <input type="file" name="imagen" class="hidden"required>
      <button><a href="{{route('coche.index')}}">Mandar</a></button>

          
{{-- <button><a href="{{route('coche.index')}}">Mandar</a></button> --}}
          {{-- <button>Enviar</button>  --}}
        </section>        

        </div>
      {{-- </form> --}}
            

          </main>
  
          @endsection
















<!--CATEGORIAS-->
{{-- <section class="categorias">
    <div class="itinerarios">
        <i class="fas fa-map-marker"></i>
        <p>Itinerarios de concentraciones de vehículos clásicos</p>
    </div>
    <div class="mecanica">
        <i class="fas fa-wrench"></i>
        <p>Talleres de reparación y restauración</p>
    </div>
    <div class="horarios">
        <i class="fas fa-clock"></i>
        <p>Horarios para visitas guiadas</p>
    </div>
    <div class="aparcamiento">
        <i class="fas fa-car"></i>
        <p>Aparcamiento privado para visitantes</p>
    </div>
</section>

<!--PIE DE PAGINA-->
<footer>
    <section class="informacion">
        <div class="informacion1">
            <h4>Sobre Nosotros</h4>
            <p>Nos dedicamos a la adquisición de vehículos de exposición clásicos así como a la restauración de los
                mismos.
            </p><br>
            <p>En nuestro concesionario podrá encontrar una gran variedad de vehículos clásicos para su deleite.
                También disponemos de stands de souvenirs y de itinerarios y horarios de visitas guiadas
            </p>
        </div>

        <div class="informacion2">
            <h4>Últimos vehículos restaurados</h4>
            <ul>
                <li>Citroën 2CV de 1961</li>
                <li>Ford Mustang Boss 302 de 1969</li>
                <li>Mini Cooper S de 1970</li>
                <li>Daihatsu Midget de 1963</li>
                <li>Ford Model T Tourer de 1915</li>
            </ul>
        </div>
        <div class="informacion3">
            <h4>Síguenos en nuestras redes sociales</h4>
            <p class="redes-sociales">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
            </p>
        </div>

    </section>
    <section class="copyright">
        <h5>Fran&Juanjo Motorsports Dealership © 2022</h5>
    </section>
</footer>
</body>
</html> --}}



