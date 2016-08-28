@extends('layout') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class=" col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
            <div class="text-center">
                <h1>Escuelas</h1></div>
            <div class="panel panel-primary">
                <div class="panel-body"> @for ( $i = 0 ; $i
                    < count($schools) ; $i++ ) <a href="/grupoinvestigacion/escuela/{{ $schools[$i]['id'] }}">
                        <div class="row">
                            <div class="text-center">
                                <h4>{{ $schools[$i]['nombre'] }}</h4> </div>
                        </div>
                        </a> @if( $i != count($schools) - 1)
                        <hr> @endif @endfor </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
            <div class="text-center">
                <h1>Area</h1> </div>
            <div class="panel panel-primary">
                <div class="panel-body"> @for ( $i = 0 ; $i < count($areas) ; $i++ ) 
                       <a href="/grupoinvestigacion/area/{{ $areas[$i]['id'] }}">
                        <div class="row">
                            <div class="text-center">
                                <h4>{{ $areas[$i]['nombre'] }}</h4></div>
                        </div>
                        </a> @if( $i != count($areas) - 1)
                        <hr>@endif @endfor </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
            <div class="text-center">
                <h1>Profesores</h1></div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody> @foreach($teachers as $teacher)
                            <tr>
                                <td><a href="/profesor/{{ $teacher["id"] }}">{{ $teacher["nombre"] }}</a></td>
                            </tr> @endforeach </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> @stop