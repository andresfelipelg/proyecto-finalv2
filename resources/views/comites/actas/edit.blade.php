@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('actas.update', $acta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Editar acta</h1>

                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="comite_id" id="comite_id" required>
                        <option value="">Seleccione comite</option>
                        @foreach($comites as $value)
                          <option value="{{ $value->id }}" {{$value->id==$acta->comite_id? 'selected' : ''}}>{{ $value->nom_comite }}</option>
                        @endforeach
                     </select>
                 </div>

                 <div class="mb-3  text-start">
                  <input class="form-control" type="text" name="nom_citador" value="{{$acta->nom_citador}}">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" name="lugar_acta" value="{{$acta->lugar_acta}}">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>   
                
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="date" name="fecha_acta" value="{{$acta->fecha_acta}}">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>

                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="time" name="hora_inicio" value="{{$acta->hora_inicio}}">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>

                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="time" name="hora_fin" value="{{$acta->hora_fin}}">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>

                <div class="mb-3 mt-3 text-start">
                    <textarea name="acta_votacion" id="" cols="55" rows="30" >{{$acta->acta_votacion}}</textarea>
                </div>
                 

                 

                 
                 
                     
                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection