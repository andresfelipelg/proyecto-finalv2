@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('proveedores.store') }}" method="POST" enctype= "multipart/form-data">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Nuevo proveedor</h1>

                  <div class="mb-3  text-start">
                  <input class="form-control" type="number" name="id" placeholder="NIT proveedor">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>

                <div class="mb-3  text-start">
                  <input class="form-control" type="text" name="nom_proveedor" placeholder="Nombre proveedor">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="number" name="arl_proveedor" placeholder="ARL proveedor">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>     
                  
                  <div class="mb-3 mt-3 text-start">
                    
                    <label for="ruta_hv" class="form-label">subir certificado ARL</label>
                    <input type="file" name="ruta_certARL">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    
                    <label for="diploma" class="form-label">subir documento seguridad social</label>
                    <input type="file" name="ruta_segSocial">
                  </div>
                  <div class="mb-3  text-start">
                    
                    <label for="ruta_certi50h" class="form-label">subir ficha Seguridad</label>
                    <input type="file" name="ruta_fichaSegu">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    

                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection