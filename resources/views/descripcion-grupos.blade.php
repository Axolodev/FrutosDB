@extends('layout') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-8" align="center">
            <br>
            <h2>Lineas de investigacion de {{ $grupo["nombre"] }}</h2>
            <div class="panel panel-default">
                <div class="panel-body"> @for ($i = 0 ; $i < count($lineas) ; $i++) <a href="/lineainvestigacion/{{ $lineas[$i]["id"] }}">
                        <h4>{{ $lineas[$i]["name"] }}</h4></a> @if ($i != count($lineas) - 1)
                        <hr> @endif @endfor </div>
            </div>
        </div>
    </div>
</div>
</div> @stop