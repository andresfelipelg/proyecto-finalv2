@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('participantes.update', $participante->id) }}" method="POST" enctype= "multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Editar participante</h1>

                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="user_id" id="user_id" required>
                        <option value="">Seleccione usuario</option>
                        @foreach($users as $value)
                          <option value="{{ $value->id }}" {{$value->id==$participante->user_id? 'selected' : ''}}>{{ $value->nombre }}</option>
                        @endforeach
                     </select>
                 </div>

                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="acta_id" id="acta_id" required>
                        <option value="">Seleccione acta</option>
                        @foreach($actas as $value)
                          <option value="{{ $value->id }}" {{$value->id==$participante->acta_id? 'selected' : ''}}>{{ $value->id }}</option>
                        @endforeach
                     </select>
                 </div>

                 <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="cargo_id" id="cargo_id" required>
                        <option value="">Seleccione cargo</option>
                        @foreach($cargos as $value)
                          <option value="{{ $value->id }}" {{$value->id==$participante->cargo_id? 'selected' : ''}}>{{ $value->nom_cargo }}</option>
                        @endforeach
                     </select>
                 </div>  
                
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" name="nom_usuario"value="{{ $participante->nom_usuario }}">
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