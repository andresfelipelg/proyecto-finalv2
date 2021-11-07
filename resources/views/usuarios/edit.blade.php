@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Editar Usuario</h1>

                <div class="mb-3  text-start">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $user->nombre }}">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                  <label for="apellido" class="form-label">Apellido</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $user->apellido }}">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>     
                  <div class="mb-3  text-start">
                  <label for="cedula" class="form-label">Cedula</label>
                  <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $user->cedula }}">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                  <label for="telefono" class="form-label">Telefono</label>
                  <input type="number" class="form-control" id="telefono" name="telefono" value="{{ $user->telefono }}">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                  <label for="celular" class="form-label">Celular</label>
                  <input type="number" class="form-control" id="celular" name="celular" value="{{ $user->celular }}">
                  </div>
                  <div class="mb-3  text-start">
                  <label for="direccion" class="form-label">Direccion</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $user->direccion }}">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    <select class="form-select" aria-label="Default select example" name="id_role" id="id_role">
                        <option value="">Seleccione el rol del usuario</option>
                        @foreach($roles as $role)
                          <option value="{{ $role->id }}">{{ $role->nom_rol }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('rol_id'))
                        <p class="text-danger">{{ $errors->first('rol_id') }}</p>
                    @endif
                  </div>
                  <div class="mb-3  text-start">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                  </div>
                  <!--<div class="mb-3  text-start">
                  <label for="password" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
                  </div>-->
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection