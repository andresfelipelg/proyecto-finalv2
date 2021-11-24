@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('politicas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Registro Usuario</h1>

                  <div class="mb-3 mt-3 text-start">
                    <select class="form-select" aria-label="Default select example" name="empresa_id" id="empresa_id">
                       <option value="">seleccione empresa</option>
                       @foreach($empresas as $empresa)
                         <option value="{{ $empresa->id }}">{{ $empresa->nom_empresa }}</option>
                       @endforeach
                    </select>
                </div>

                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" name="nom_empresa" placeholder="Nombre empresa">
                    @if ($errors->has('nom_empresa'))
                    <p class="text-danger">{{ $errors->first('nom_empresa') }}</p>
                @endif 
                </div>     
                <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="ruta_compromiso" class="form-label">subir compromiso</label>
                    <input type="file" name="ruta_compromiso">
                  </div>

                <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="ruta_requisitos" class="form-label">subir requisitos</label>
                    <input type="file" name="ruta_requisitos">
                  </div>

                <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="ruta_objetivos" class="form-label">subir Objetivos</label>
                    <input type="file" name="ruta_objetivos">
                  </div>

                <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="ruta_documentacion" class="form-label">subir Documentacion</label>
                    <input type="file" name="ruta_documentacion">
                  </div>

                <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="firma" class="form-label">subir firma</label>
                    <input type="file" name="firma">
                  </div>

                  <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="date" name="fecha" placeholder="fecha">
                  </div>
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection