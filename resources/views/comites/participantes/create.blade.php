@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('participantes.store') }}" method="POST" enctype= "multipart/form-data">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Nuevo Participante</h1>

                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="user_id" id="user_id">
                        <option value="">seleccione usuario</option>
                        @foreach($users as $user)
                          <option value="{{ $user->id }}">{{ $user->nombre }}</option>
                        @endforeach
                     </select>
                 </div>

                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="acta_id" id="acta_id">
                        <option value="">seleccione acta</option>
                        @foreach($actas as $acta)
                          <option value="{{ $acta->id }}">{{ $acta->id }}</option>
                        @endforeach
                     </select>
                 </div>

                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="cargo_id" id="cargo_id">
                        <option value="">seleccione el cargo</option>
                        @foreach($cargos as $cargo)
                          <option value="{{ $cargo->id }}">{{ $cargo->nom_cargo }}</option>
                        @endforeach
                     </select>
                 </div>  
                
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" name="nom_usuario" placeholder="nombre del usuario">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>

                </div>
                  <div class="mb-3  text-start">
                    <!--<input class="form-control" type="text"  name="ruta_certiSalud" placeholder="subir certificado de salud">-->
                    <label for="firma" class="form-label">subir firma del participante</label>
                    <input type="file" name="firma">
                  </div>

                
                  
                  
                    

                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection