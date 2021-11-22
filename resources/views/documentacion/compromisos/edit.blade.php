@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('compromisos.update', $compromiso->id) }}" method="POST" enctype= "multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Editar compromiso</h1>

                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="user_id" id="user_id" required>
                        <option value="">Seleccione usuario</option>
                        @foreach($usuarios as $value)
                          <option value="{{ $value->id }}" {{$value->id==$compromiso->user_id? 'selected' : ''}}>{{ $value->nombre }}</option>
                        @endforeach
                     </select>
                 </div>

                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="role_id" id="role_id" required>
                        <option value="">Seleccione nuevo rol</option>
                        @foreach($roles as $value)
                          <option value="{{ $value->id }}" {{$value->id==$compromiso->role_id? 'selected' : ''}}>{{ $value->nom_rol }}</option>
                        @endforeach
                     </select>
                 </div>
                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="ind_compromiso" id="ind_compromiso">
                        <option value="">tiene compromiso?</option>
                        
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                        
                     </select>
                 </div>

                 <div>
                    <label for="ruta_compromiso" class="form-label">compromiso actual: {{$compromiso->ruta_compromiso}}</label>

                 <!--<input type="file" name="ruta_compromiso"   class="form-control"  value="{{$compromiso->ruta_compromiso}}">-->
                 <a href="compromiso/{{$compromiso->ruta_compromiso}}" 
                             target="popup" 
                             onclick="window.open('compromiso/{{$compromiso->ruta_compromiso}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a>
                 </div>

                 <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="ruta_compromiso" class="form-label">subir nuevo compromiso</label>
                    <input type="file" name="ruta_compromiso">
                  </div>
                 
                     
                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection