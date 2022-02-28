@extends('layouts.plantilla')

@section('titulo','Home')


@section('contenido')





{{-- <a href="{{route('coche.create')}}">Registrar coche</a> --}}

{{-- @foreach ($coches as $resultado)
    <li>
    <a href="{{route('coche.show',$resultado->id)}}">{{$resultado->nombre}}</a>
    </li>
@endforeach --}}

{{-- {{$coches->links()}} --}}
<main class="blog">
    {{-- <h1>Bienvenido a la pagina principal</h1> --}}
    <h2>Últimos vehículos del concesionario</h2>
    <article class="entrada">
        {{-- {{$coches[0]->imagen}} --}}
        {{-- <img src="img/ {{route('coche.show',$coches[0]->imagen)}}" alt="texto entrada"> --}}
        {{-- <img src="/img/ {{route('coche.show',$coches[0]->imagen)}}" alt="texto entrada"> --}}
        <img src="/img/{{$coches[0]->imagen}} "alt="La imagen no ha cargado correctamente"height='30%'> 
        <div class="contenido">
            {{-- <h3>FERRARI TESTAROSSA</h3> --}}
           {{-- <span><h3>{{$coches[1]->nombre}}</h3></span> --}}
            <p>NOMBRE: <span>{{strtoupper($coches[0]->nombre)}}</span></p>
            <p>AÑO: <span>1984</span></p>
            <p>DONADO POR: <span>ROSSO CORSA MARBELLA</span></p>
           
            <a href="{{route('coche.show',$coches[0]->id)}}" class="boton">Editar</a>
        </div>
    </article>
    <article class="entrada">
        <img src="/img/{{$coches[1]->imagen}} "alt="La imagen no ha cargado correctamente"height='50%'> 
        <div class="contenido">
            <p>NOMBRE: <span>{{strtoupper($coches[1]->nombre)}}</span></p>
            <p>AÑO: <span>1959</span></p>
            <p>DONADO POR: <span>Clásicos Renault S.A.</span></p>
            <a href="{{route('coche.show',$coches[1]->id)}}" class="boton">Editar</a>

        </div>
    </article>
    <article class="entrada">
        <img src="/img/{{$coches[2]->imagen}} "alt="La imagen no ha cargado correctamente"width='30%'> 
        <div class="contenido">
            <p>NOMBRE: <span>{{strtoupper($coches[2]->nombre)}}</span></p>
            <p>AÑO: <span>1968</span></p>
            <p>DONADO POR: <span>PORSCHE ESPAÑA</span></p>
            <a href="{{route('coche.show',$coches[2]->id)}}" class="boton">Editar</a>

        </div>
    </article>
    <article class="entrada">
        <img src="/img/{{$coches[3]->imagen}} "alt="La imagen no ha cargado correctamente"width='30%'> 
        <div class="contenido">
            <p>NOMBRE: <span>{{strtoupper($coches[3]->nombre)}}</span></p>
            <p>AÑO: <span>1972</span></p>
            <p>DONADO POR: <span>RESTAURACIONES MANOLO S.L.</span></p>
            <a href="{{route('coche.show',$coches[3]->id)}}" class="boton">Editar</a>

        </div>
    </article>
    <article class="entrada">
        <img src="/img/{{$coches[4]->imagen}} "alt="La imagen no ha cargado correctamente"width='30%'> 
        <div class="contenido">
            <p>NOMBRE: <span>{{strtoupper($coches[4]->nombre)}}</span></p>
            <p>AÑO: <span>1954</span></p>
            <p>DONADO POR: <span>HYMAN LTD</span></p>
            <a href="{{route('coche.show',$coches[4]->id)}}" class="boton">Editar</a>

        </div>
    </article>
    <article class="entrada">
        <img src="/img/{{$coches[5]->imagen}} "alt="La imagen no ha cargado correctamente"width='30%'> 
        <div class="contenido">
            <p>NOMBRE: <span>{{strtoupper($coches[5]->nombre)}}</span></p>
            <p>AÑO: <span>1961</span></p>
            <p>DONADO POR: <span>JAGUAR MOTORSPORTS ES</span></p>
            <a href="{{route('coche.show',$coches[5]->id)}}" class="boton">Editar</a>

        </div>
    </article>
</main>

@section('ultimos')
                <li>{{$coches[0]->nombre}} de {{$coches[0]->anio}}</li>
                <li>{{$coches[1]->nombre}} de {{$coches[1]->anio}}</li>
                <li>{{$coches[2]->nombre}} de {{$coches[2]->anio}}</li>
                <li>{{$coches[3]->nombre}} de {{$coches[3]->anio}}</li>
                <li>{{$coches[4]->nombre}} de {{$coches[4]->anio}}</li>
                <li>{{$coches[5]->nombre}} de {{$coches[5]->anio}}</li>
@endsection
@endsection
{{-- aqui se muestran los coches --}}
