@extends('layout') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-8" align="center">
            <h1>Grupos de Investigación</h1>
            <div class="panel panel-default">
                <div class="panel-body">
                    @for ($i = 0 ; $i
                    < count($grupos) ; $i++) <a href="/grupoinvestigacion/{{ $grupos[$i]["id"] }}">
                       
                        <h4>{{ $grupos[$i]["nombre"] }}</h4></a> 
                        @if ($i != count($grupos) - 1)
                        <hr>
                        @endif
                        @endfor </div>
            </div>
        </div>
    </div>
</div> @stop