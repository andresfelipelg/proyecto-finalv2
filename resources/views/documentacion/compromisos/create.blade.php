@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('compromisos.store') }}" method="POST" enctype= "multipart/form-data">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Compromisos</h1>

                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="user_id" id="user_id">
                        <option value="">seleccione usuario</option>
                        @foreach($users as $user)
                          <option value="{{ $user->id }}">{{ $user->nombre }}</option>
                        @endforeach
                     </select>
                 </div>
                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="role_id" id="role_id">
                        <option value="">seleccione rol</option>
                        @foreach($roles as $role)
                          <option value="{{ $role->id }}">{{ $role->nom_rol }}</option>
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
                  
                  <div class="mb-3 mt-3 text-start">
                    <!--<input class="form-control" type="text" name="ruta_hv" placeholder="subir hoja de vida">-->
                    <label for="ruta_compromiso" class="form-label">subir compromiso</label>
                    <input type="file" name="ruta_compromiso">
                  </div>
                  
                  
                    

                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection