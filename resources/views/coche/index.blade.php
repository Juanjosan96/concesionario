@extends('layouts.plantilla')

@section('titulo','Home')


@section('contenido')





{{-- <a href="{{route('coche.create')}}">Registrar coche</a> --}}

@foreach ($coches as $resultado)
    <li>
    <a href="{{route('coche.show',$resultado->id)}}">{{$resultado->nombre}}</a>
    </li>


{{$coches->links()}}
<main class="blog">
    <h1>Bienvenido a la pagina principal</h1>
    <h2>Últimos vehículos del concesionario</h2>
    <article class="entrada">
        {{$datos->imagen}}
        <img src="img/ {{route('coche.show',$resultado->imagen)}}" alt="texto entrada">
        <div class="contenido">
            {{-- <h3>FERRARI TESTAROSSA</h3> --}}
            <h3>{{$coches[0]->nombre}}</h3>
            <p>AÑO: <span>1984</span></p>
            <p>DONADO POR: <span>ROSSO CORSA MARBELLA</span></p>
            <a href="{{route('coche.show',$resultado->id)}}" class="boton">LEER MÁS</a>
        </div>
    </article>
    <article class="entrada">
        <img src=" /img/02.jpg" alt="texto entrada">
        <div class="contenido">
            <h3>RENAULT 1100 CARAVELLE</h3>
            <p>AÑO: <span>1959</span></p>
            <p>DONADO POR: <span>CLÁSICOS RENAULT S.A.</span></p>
            <a href="#" class="boton">LEER MÁS</a>
        </div>
    </article>
    <article class="entrada">
        <img src=" /img/03.jpg" alt="texto entrada">
        <div class="contenido">
            <h3>PORSCHE 911 R</h3>
            <p>AÑO: <span>1968</span></p>
            <p>DONADO POR: <span>PORSCHE ESPAÑA</span></p>
            <a href="#" class="boton"> LEER MÁS</a>
        </div>
    </article>
    <article class="entrada">
        <img src=" /img/04.jpg" alt="texto entrada">
        <div class="contenido">
            <h3>ALFA ROMEO 2000 GTV</h3>
            <p>AÑO: <span>1972</span></p>
            <p>DONADO POR: <span>RESTAURACIONES MANOLO S.L.</span></p>
            <a href="#" class="boton"> LEER MÁS</a>
        </div>
    </article>
    <article class="entrada">
        <img src=" /img/05.jpg" alt="texto entrada">
        <div class="contenido">
            <h3>CADILLAC SERIES 62</h3>
            <p>AÑO: <span>1954</span></p>
            <p>DONADO POR: <span>HYMAN LTD</span></p>
            <a href="#" class="boton"> LEER MÁS</a>
        </div>
    </article>
    <article class="entrada">
        <img src=" /img/06.jpg" alt="texto entrada">
        <div class="contenido">
            <h3>JAGUAR E-TYPE</h3>
            <p>AÑO: <span>1961</span></p>
            <p>DONADO POR: <span>JAGUAR MOTORSPORTS ES</span></p>
            <a href="#" class="boton"> LEER MÁS</a>
        </div>
    </article>
</main>
@endforeach
@endsection
{{-- aqui se muestran los coches --}}
