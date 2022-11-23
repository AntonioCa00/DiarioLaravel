
@extends('plantilla')

@section('contenido')

    <div class="container mt-5 col-md-6">
        <h1 class="display-2 text-center mb-5" style="color: aliceblue">ACTUALIZAR RECUERDO</h1>
        
        <div class="card text-center mb-5">
            <div class="card-header">
              ¡¡Querido Diario!!
            </div>            

            <div class="card-body">
                <form class="m-4" method="post" action="{{route('recuerdo.update',$consultaID->idRecuerdo)}}">
                
                    <!-- Token de validación (sintaxis de blade)-->
                    @csrf            

                    <!-- Disfrazar el metodo post en un put -->
                    {!!method_field('PUT')!!}

                    <div class="mb-3">
                        <label class="form-label">Titulo:</label>
                        <input name="txtTitulo" type="text" class="form-control" value="{{$consultaID->titulo}}">
                        <p class="text-primary fst-italic bw-bold">{{$errors ->first('txtTitulo')}}</p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Recuerdo:</label>
                        <textarea class="form-control" name="txtRecuerdo" rows="3">{{$consultaID->recuerdo}}</textarea>
                        <p class="text-primary fst-italic">{{$errors ->first('txtRecuerdo')}}</p>
                    </div>                                
                
            </div>

            <div class="card-footer text-muted">
              
                <button type="submit" class="btn btn-secondary">Actualizar Recuerdo</button>            
            </div>
        </form>
        </div>

    </div>
@stop