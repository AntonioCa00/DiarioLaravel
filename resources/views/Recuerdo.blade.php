
@extends('plantilla')

@section('contenido')
    <h1 class="display-2 mt-4 mb-4 text-center" style="color:aliceblue">CONSULTAR RECUERDOS</h1>
    
    @foreach ($ConsultaRec as $consulta)
    <div class="container col-md-6 mt-4 mb-4">
            
        <div class="card text-center">

            <div class="card-header">
                <h5 class="text-primary text-center">{{$consulta->fecha}}</h5>
            </div>

            <div class="card-body">
              <h5 class="card-title">{{$consulta->titulo}}</h5>
              <p class="card-text">{{$consulta->recuerdo}}</p>
            </div>

            <div class="card-footer text-muted">
              <a href="" class="btn btn-danger">A</a>
              <a href="" class="btn btn-warning">E</a>
            </div>
        </div>    
    </div>
    @endforeach
@stop