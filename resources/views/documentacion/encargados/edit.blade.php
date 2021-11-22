@extends('layout.app')

@section('css')

{{-- organizando --}}

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('encargados.store') }}" method="POST" enctype= "multipart/form-data">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Registro Encargado</h1>

                <div class="mb-3  text-start">
                  <input class="form-control" type="text" name="nom_encargado" placeholder="Nombre encargado">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" name="ape_encargado" placeholder="Apellido encargado">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>     
                  <div class="mb-3  text-start">
                    <input class="form-control" type="text" name="nivel_estudio" placeholder="Nivel de estudio">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="ruta_hv" class="form-label">subir hoja de vida</label>
                    <input type="file" name="ruta_hv">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text"  name="ruta_diploma" placeholder="subir diploma">-->
                    <label for="diploma" class="form-label">subir diploma</label>
                    <input type="file" name="ruta_diploma">
                  </div>
                  <div class="mb-3  text-start">
                    <!--<input class="form-control" type="text"  name="ruta_certi50h" placeholder="subir certificado 50 horas">-->
                    <label for="ruta_certi50h" class="form-label">subir certificado 50 horas</label>
                    <input type="file" name="ruta_certi50h">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    

                  </div>
                  <div class="mb-3  text-start">
                    <!--<input class="form-control" type="text"  name="ruta_certiSalud" placeholder="subir certificado de salud">-->
                    <label for="ruta_certiSalud" class="form-label">subir certificado de salud</label>
                    <input type="file" name="ruta_certiSalud">
                  </div>
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection