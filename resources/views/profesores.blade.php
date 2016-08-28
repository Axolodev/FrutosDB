@extends('layout')

@section('content')
<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
@stop