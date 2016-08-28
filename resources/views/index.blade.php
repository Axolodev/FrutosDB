@extends('layout')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-3 col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
                <h1>Escuelas</h1>
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-primary">Escuela de Ingeniería y Ciencias</button>
                    <br>
                    <button type="button" class="btn btn-primary">Escuela de Educación, de Humanidades y Ciencias Sociales</button>
                    <br>
                    <button type="button" class="btn btn-primary">EGADE Business School</button>
                    <br>
                    <button type="button" class="btn btn-primary">Escuela de Gobierno y transformación pública</button>
                    <br>
                    <button type="button" class="btn btn-primary">Escuela de Medicina</button>
                    <br>

                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-3 col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
                <h1>Area</h1>
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-primary">Tecnologías de Información</button>
                    <br>
                    <button type="button" class="btn btn-primary">Samsung</button>
                    <br>
                    <button type="button" class="btn btn-primary">Sony</button>
                    <br>
                    <button type="button" class="btn btn-primary">Sony</button>
                    <br>
                    <button type="button" class="btn btn-primary">Sony</button>
                    <br>

                </div>
            </div>
            <div class=" col-lg-3 col-md-4 col-sm-4 col-xs-4" style="background-color:white;">
                <h1>Profesores</h1>
                <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher["nombre"] }}</td>
                        </tr>
                    @endforeach            
                    
                </tbody>
                </table>
            </div>


        </div>
    </div>
@stop