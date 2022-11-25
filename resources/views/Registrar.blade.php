
@extends('plantilla')

@section('contenido')

    @if(session()->has('confirmacion'))
        
        {!!" <script>Swal.fire(
            'Registro Correcto!',
            'Su recuerdo se guardó!',
            'success'
          )</script>"!!}
    @endif

    <div class="container mt-5 col-md-6">
        <h1 class="display-2 text-center mb-5" style="color: aliceblue">REGISTRAR RECUERDOS</h1>
        
        <div class="card text-center mb-5">
            <div class="card-header">
              ¡¡Querido Diario!!
            </div>            

            <div class="card-body">
                <form class="m-4" method="post" action="{{route('recuerdo.store')}}">
                
                    <!-- Token de validación (sintaxis de blade)-->
                    @csrf            

                    <div class="mb-3">
                        <label class="form-label">Titulo:</label>
                        <input name="txtTitulo" type="text" class="form-control" value="{{old('txtTitulo')}}">
                        <p class="text-primary fst-italic bw-bold">{{$errors ->first('txtTitulo')}}</p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Recuerdo:</label>
                        <textarea class="form-control" name="txtRecuerdo" rows="3">{{old('txtRecuerdo')}}</textarea>
                        <p class="text-primary fst-italic">{{$errors ->first('txtRecuerdo')}}</p>
                    </div>                                
                
            </div>

            <div class="card-footer text-muted">
              
                <button type="submit" class="btn btn-secondary">Guardar Recuerdo</button>            
            </div>
        </form>
        </div>

    </div>
@stop