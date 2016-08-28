@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                <h2>Nombre: {{ $profesor["nombre"] }}</h2>
                
                <h2>Ubicacion: {{ $profesor["oficina"] }}</h2>
                <h2>Proyectos:</h2>
                <ul>
                    @foreach ($proyectos as $proyecto)
                    <li><a href="/proyecto/{{ $proyecto["id"] }}">{{ $proyecto["nombre"] }}</a></li>
                    @endforeach
                </ul>
                <h3>Contacto: {{ $profesor["telefono"] }} </h3>
                <h3>Correo: {{ $profesor["correo"] }}</h3>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6" align=right >
                <img src="http://placehold.it/300x300">

            </div>
        </div>
    </div>

@stop