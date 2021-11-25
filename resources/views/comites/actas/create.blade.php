@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('actas.store') }}" method="POST">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Nueva Acta</h1>

                  <div class="mb-3 mt-3 text-start">
                     <select class="form-select" aria-label="Default select example" name="comite_id" id="comite_id">
                        <option value="">seleccione un comite</option>
                        @foreach($comite as $comi)
                          <option value="{{ $comi->id }}">{{ $comi->nom_comite }}</option>
                        @endforeach
                     </select>
                 </div>

                <div class="mb-3  text-start">
                  <input class="form-control" type="text" name="nom_citador" placeholder="Nombre citador">
                  @if ($errors->has('nombre'))
                  <p class="text-danger">{{ $errors->first('nombre') }}</p>
              @endif
                </div>
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="text" name="lugar_acta" placeholder="lugar del acta">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>   
                
                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="date" name="fecha_acta" placeholder="Fecha del acta">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>

                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="time" name="hora_inicio" placeholder="hora de inicio">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>

                <div class="mb-3 mt-3 text-start">
                    <input class="form-control" type="time" name="hora_fin" placeholder="hora fin">
                    @if ($errors->has('apellido'))
                    <p class="text-danger">{{ $errors->first('apellido') }}</p>
                @endif 
                </div>

                <div class="mb-3 mt-3 text-start">
                    <textarea name="acta_votacion" id="" cols="55" rows="30" placeholder="Acta de votacion: Desarrollo de la reunión"></textarea>
                </div>
                  
                  
                    

                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection