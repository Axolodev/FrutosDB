@extends ('layout') @section ('content')
<div class="container">
    <div class="row">
        <div class="col-xs-offset-2 col-xs-8" align=center>
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <div class="panel-title"> FDSAFDRegistro </div>
                </div>
                <div class="panel-body">
                   <div class="form-group">
                        {{ Form::open(array('url' => url('/proyecto'), 'method' => 'POST')) }}
                        {{ Form::label('nombre', 'Nombre') }}
                        {{ Form::text('nombre', '', array('class' => 'form-control')) }}
                        <br>
                        
                        {{ Form::label('cupo', 'Cupo límite') }}
                        {{ Form::number('cupo', '', array('class' => 'form-control')) }}
                        <br>  
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @endsection