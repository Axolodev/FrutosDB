@extends('layout') @section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-10">
           @if (strcmp($proyecto["estado"], "abierto") == 0)
            <div class="panel panel-success">
            @elseif (strcmp($proyecto["estado"], "cerrado") == 0)
              <div class="panel panel-danger">
              @else 
              <div class="panel panel-info">
              @endif
               <div class="panel-heading">
                <div class="panel-title"><h3>{{ $proyecto["nombre"] }}</h3></div>
                </div>
                <div class="panel-content">
                <div class="panel-body">
                <h3>Profesor Líder: <a href="/profesor/{{ $profesor_lider["id"] }}">{{ $profesor_lider["nombre"] }}</a></h3>
                <h3>Linea de Investigación: {{ $linea["name"] }}</h3>
                <h3>Descripción:</h3>
                    <div> {{ $proyecto["descripcion"]}} </div>
                <h3>Estado:</h3> {{ $proyecto["estado"] }} </div>
            </div>
            </div>
        </div>
    </div>
</div> @stop