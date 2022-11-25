
@extends('plantilla')

@section('contenido')

    @if(session()->has('actualizar'))
            
            {!!" <script>Swal.fire(
                'Actualización Correcta!',
                'Su recuerdo se actualizó!',
                'success'
              )</script>"!!}
    @endif

    <h1 class="display-2 mt-4 mb-4 text-center" style="color:aliceblue">ELIMINAR RECUERDOS</h1>
    
    <div class="container col-md-6 mt-4 mb-4">

      <div class="alert alert-info text-center" role="alert">
        <h5>¿Desea eliminar el siguiente recuerdo?</h5>
      </div>
            
        <div class="card text-center">

            <div class="card-header">
                <h5 class="text-primary text-center">{{$consultaID->fecha}}</h5>
            </div>

            <div class="card-body">
              <h5 class="card-text">{{$consultaID->titulo}}</h5>
              <p class="card-text">{{$consultaID->recuerdo}}</p>
            </div>

            <div class="card-footer text-muted">
              <form method="post" action="{{route('recuerdo.destroy',$consultaID->idRecuerdo)}}">

                @csrf 
                {!!method_field('DELETE')!!}

                <button class="btn btn-danger" type="submit">Eliminar</button>
                <a href="{{route('recuerdo.index')}}" class="btn btn-warning">Regresar</a>
              </form>
          </div>
        </div>    
    </div>
@stop