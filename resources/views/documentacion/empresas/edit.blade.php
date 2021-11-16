@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Editar Empresa</h1>

                  <div class="mb-3  text-start">
                  <label for="id" class="form-label">NIT</label>
                  <input type="number" class="form-control" id="id" name="id" value="{{ $empresa->id }}">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
                  @endif
                </div>

                <div class="mb-3  text-start">
                  <label for="nom_empresa" class="form-label">Nombre de la empresa</label>
                  <input type="text" class="form-control" id="nom_empresa" name="nom_empresa" value="{{ $empresa->nom_empresa }}">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                  <label for="val_latitud" class="form-label">Latitud</label>
                  <input type="number" class="form-control" id="val_latitud" name="val_latitud" value="{{ $empresa->val_latitud }}">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>     
                  <div class="mb-3  text-start">
                  <label for="val_longitud" class="form-label">longitud</label>
                  <input type="number" class="form-control" id="val_longitud" name="val_logitud" value="{{ $empresa->val_longitud }}">
                </div>
                <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="actiEco_id" id="actiEco_id" required>
                        <option value="">Seleccione la actividad economica de la empresa</option>
                        @foreach($actiEco as $value)
                          <option value="{{ $value->id }}" {{$value->id==$empresa->actiEco_id? 'selected' : ''}}>{{ $value->nom_actividad }}</option>
                        @endforeach
                     </select>
                 </div>

                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="ind_natJurid" id="ind_natJurid">
                        <option value="">Natural/Juridico</option>
                        
                          <option value="Natural">Natural</option>
                          <option value="Juridico">Jurídico</option>
                        
                     </select>
                 </div>

                 </div>     
                  <div class="mb-3  text-start">
                  <label for="tel_contacto1" class="form-label">contacto</label>
                  <input type="number" class="form-control" id="tel_contacto1" name="tel_contacto1" value="{{ $empresa->tel_contacto1 }}">
                </div>

                  </div>     
                   <div class="mb-3  text-start">
                   <label for="correo" class="form-label">correo</label>
                   <input type="email" class="form-control" id="correo" name="correo" value="{{ $empresa->correo }}">
                 </div>

                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="tipo_empresa_id" id="tipo_empresa_id">
                        <option value="">Tipo de empresa</option>
                        @foreach($tipoEmpresa as $valueEmpresa)
                          <option value="{{ $valueEmpresa->id }}" {{$valueEmpresa->id==$empresa->tipo_empresa_id? 'selected' : ''}}>{{ $valueEmpresa->nom_tipo }}</option>
                        @endforeach
                     </select>
                </div>
                  
                  
                  
                  
                  
                  
                 <div class="d-grid ">
                 <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
                
              
              </form>
              </div>
              </div>
@endsection