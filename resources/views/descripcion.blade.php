@extends('layout')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h2>{{ $proyecto["nombre"] }}</h2>
                <h2>Profesor Líder: <a href="/profesor/{{ $profesor_lider["id"] }}">{{ $profesor_lider["nombre"] }}</a></h2>
                <h2>Linea de Investigación: {{ $linea["name"] }}</h2>
                <p><strong>Resumen del Proyecto:</strong><div>
                    {{ $proyecto["descripcion"]}}
                </div></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h3>Estado: {{ $proyecto["estado"] }}</h3>
            </div>

        </div>
    </div>

    </div>
@stop