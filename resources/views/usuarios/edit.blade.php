@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Registro Usuario</h1>

                <div class="mb-3  text-start">
                  <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" name="apellido" placeholder="Apellido">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>     
                  <div class="mb-3  text-start">
                    <input class="form-control" type="number" name="cedula" placeholder="Cedula">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="number" name="telefono" placeholder="Telefono">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="number"  name="celular" placeholder="Celular">
                  </div>
                  <div class="mb-3  text-start">
                    <input class="form-control" type="text"  name="direccion" placeholder="Direccion">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <select class="form-select" aria-label="Default select example" name="rol_id" id="rol_id">
                        <option value="">Seleccione el rol del usuario</option>
                        <option value="1" name="0">Administrador</option>
                         <option value="2" name="1">Usuario</option>
                    </select>
                    @if ($errors->has('rol_id'))
                        <p class="text-danger">{{ $errors->first('rol_id') }}</p>
                    @endif
                  </div>
                  <div class="mb-3  text-start">
                    <input class="form-control" type="email"  name="email" placeholder="email">
                  </div>
                  <div class="mb-3  text-start">
                    <input class="form-control" type="text"  name="password" placeholder="Password">
                  </div>
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection