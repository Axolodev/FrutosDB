@extends('layout')

@section('content')
<div class="container-fluid">
        <div class="row">

            <div class="col-xs-offset-1 col-xs-10" style="background-color:white;">
                <h1>Proyectos</h1>
                <ol>
                    @foreach($projects as $project)
                        <li>{{$project['titulo']}}</li>
                        <ul>{{$project['resumen']}}</ul></li>
                    @endforeach
                    <li>Proyecto 1</li>
                    <li>Proyecto 2
                        <ul>
                            <li>Descripción del proyecto </li>
                        </ul>
                    </li>
                    <li>Proyecto 3</li>
                </ol>
            </div>

        </div>
    </div>
@stop