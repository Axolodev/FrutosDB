@extends('layout')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-xs-8" align="center">
            <h1>Proyectos de {{ $linea["name"] }}</h1>
            <div class="panel panel-default">
                <div class="panel-body">
                    @for ($i = 0 ; $i < count($proyectos) ; $i++) <a href="/proyecto/{{ $proyectos[$i]["id"] }}">
                       
                        <h4>{{ $proyectos[$i]["nombre"] }}</h4></a> 
                        @if ($i != count($proyectos) - 1)
                        <hr>
                        @endif
                        @endfor </div>
            </div>
        </div>
        </div>
    </div>
@stop