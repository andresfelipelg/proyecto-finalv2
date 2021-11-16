@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Registro de empresas</h1>
                  <div class="mb-3  text-start">
                    <input class="form-control" type="number" name="id" placeholder="NIT">
                  </div>

                <div class="mb-3  text-start">
                  <input class="form-control" type="text" name="nom_empresa" placeholder="nombre de la empresa">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="number" name="val_latitud" placeholder="latitud">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>     
                  <div class="mb-3  text-start">
                    <input class="form-control" type="number" name="val_longitud" placeholder="longitud">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="actiEco_id" id="actiEco_id">
                        <option value="">Seleccione la actividad economica de la empresa</option>
                        @foreach($actiEcos as $actiEco)
                          <option value="{{ $actiEco->id }}">{{ $actiEco->nom_actividad }}</option>
                        @endforeach
                     </select>
                 </div>

                 <!--<div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="ind_natJurid">
                     <label class="form-check-label" for="ind_natJurid">
                      default
                     </label>
                </div>
                <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="1" id="ind_natJurid" checked>
                      <label class="form-check-label" for="ind_natJurid">
                       Natural
                      </label>
                 </div>-->

                 <!-- <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text"  name="ind_natJurid" placeholder="Natural o juridico">
                  </div>-->

                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="ind_natJurid" id="ind_natJurid">
                        <option value="">Natural/Juridico</option>
                        
                          <option value="Natural">Natural</option>
                          <option value="Juridico">Jurídico</option>
                        
                     </select>
                 </div>

                  <div class="mb-3  text-start">
                    <input class="form-control" type="number"  name="tel_contacto1" placeholder="contacto">
                  </div>
                  
                  <div class="mb-3  text-start">
                    <input class="form-control" type="email"  name="correo" placeholder="correo">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="tipo_empresa_id" id="tipo_empresa_id">
                        <option value="">Tipo de empresa</option>
                        @foreach($tipoEmpresas as $tipoEmpresa)
                          <option value="{{ $tipoEmpresa->id }}">{{ $tipoEmpresa->nom_tipo }}</option>
                        @endforeach
                     </select>
                 </div>
                  

                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection