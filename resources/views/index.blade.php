@extends('layout') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-3 col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
            <h1>Escuelas</h1> @foreach ($schools as $school)
            <div class="col-xs-12">
                <div class="row">
                    <div class="text-center"> <a href="/grupoinvestigacion/escuela/{{ $school['id'] }}"><h4>{{ $school['nombre'] }}</h4></a> </div>
                </div>
            </div> @endforeach </div>
        <div class="col-lg-offset-1 col-lg-3 col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
            <h1>Area</h1> @foreach ($areas as $area)
            <div class="col-xs-12">
                <div class="row">
                    <div class="text-center"> <a href="/grupoinvestigacion/area/{{ $school['id'] }}"><h4>{{ $area['nombre'] }}</h4></a> </div>
                </div>
            </div> @endforeach
        </div>
        <div class=" col-lg-3 col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
            <h1>Profesores</h1>
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
</div> @stop