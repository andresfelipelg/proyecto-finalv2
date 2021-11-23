@extends('layout.app')

@section('css')

{{-- organizando --}}

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('proveedores.update',$proveedor->id) }}" method="POST" enctype= "multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Editar Proveedor</h1>

                  <div class="mb-3  text-start">
                  <input class="form-control" type="number" name="id" value="{{ $proveedor->id }}">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>

                <div class="mb-3  text-start">
                  <input class="form-control" type="text" name="nom_proveedor" value="{{ $proveedor->nom_proveedor }}">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="number" name="arl_proveedor" value="{{ $proveedor->arl_proveedor }}">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                
                  <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="ruta_certARL" class="form-label">subir certificado arl</label>
                    <input type="file" name="ruta_certARL">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text"  name="ruta_diploma" placeholder="subir diploma">-->
                    <label for="ruta_segSocial" class="form-label">subir documento de seguridad social</label>
                    <input type="file" name="ruta_segSocial">
                  </div>
                  <div class="mb-3  text-start">
                    <!--<input class="form-control" type="text"  name="ruta_certi50h" placeholder="subir certificado 50 horas">-->
                    <label for="ruta_fichaSegu" class="form-label">subir Ficha</label>
                    <input type="file" name="ruta_fichaSegu">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    

                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection