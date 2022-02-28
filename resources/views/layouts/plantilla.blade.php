<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="/css/estilo.css" />
  <link rel="stylesheet" href="/css/formulario.css" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  

  <header>
    <div class="hero">
        <img src=" /img/logo.png" alt="logo">

        <div class="nav-hero">
            <a href="{{route('coche.index')}}">Inicio</a>
            {{-- <a href="#">Nosotros</a>
            <a href="#">Consultas</a> --}}
            <a href="{{route('coche.create')}}">Crear</a>
        </div>

    </div>
    <div class="bienvenida">
        <h1>BIENVENIDOS A CONCESIONARIOS FRAN & JUANJO</h1>
    </div>
</header>

<!--MAIN-->

@yield('contenido')
<!--CATEGORIAS-->
<section class="categorias">
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

        {{-- <div class="informacion2">
            <h4>Últimos vehículos restaurados</h4>
            <ul> --}}
                {{-- <li>Citroën 2CV de 1961</li>
                <li>Ford Mustang Boss 302 de 1969</li>
                <li>Mini Cooper S de 1970</li>
                <li>Daihatsu Midget de 1963</li>
                <li>Ford Model T Tourer de 1915</li> --}}

                {{-- <li>{{$coches[0]->nombre}} de {{$coches[0]->anio}}</li>
                <li>{{$coches[1]->nombre}} de {{$coches[1]->anio}}</li>
                <li>{{$coches[2]->nombre}} de {{$coches[2]->anio}}</li>
                <li>{{$coches[3]->nombre}} de {{$coches[3]->anio}}</li>
                <li>{{$coches[4]->nombre}} de {{$coches[4]->anio}}</li>
                <li>{{$coches[5]->nombre}} de {{$coches[5]->anio}}</li> --}}
                {{-- {{$datos->nombre}} --}}
                {{-- {{$coches}} --}}
                
                {{-- @yield('ultimo')
            </ul>
        </div> --}}
        {{-- <div class="informacion3">
            <h4>Síguenos en nuestras redes sociales</h4>
            <p class="redes-sociales">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
            </p>
        </div> --}}

    </section>
    <section class="copyright">
        <h5>Fran&Juanjo Motorsports Dealership © 2022</h5>
    </section>
</footer>










</body>
</html>