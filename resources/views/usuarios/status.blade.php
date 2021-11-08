@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('usuarios.status_update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Cambiar estado del Usuario</h1>

                  <div class="mb-3 mt-3 text-start">
                  <label for="status_id" class="form-label">Nombre: {{$user->nombre}}</label>
                  <br>
                  <label for="status_id" class="form-label">Estado: {{$user->getStatus->tipo}}</label>
                  
                  </div>

                
                
                  <div class="mb-3 mt-3 text-start">
                    <select class="form-select" aria-label="Default select example" name="status_id" id="status_id">
                        <option value="">Seleccione nuevo estado del usuario</option>
                        @foreach($status as $statu)
                          <option value="{{ $statu->id }}">{{ $statu->tipo }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('rol_id'))
                        <p class="text-danger">{{ $errors->first('rol_id') }}</p>
                    @endif
                  </div>

                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection