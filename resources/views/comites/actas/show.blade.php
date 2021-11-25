@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="" method="POST">
        @csrf
        
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" > acta de votacion</h1>
                  
                  <label for=""> Nombre del citador: {{$acta->nom_citador}}</label>
                  <br>
                  <label for=""> Fecha: {{$acta->fecha_acta}}</label>
                  <br>
                  <label for=""> hora inicio: {{$acta->hora_inicio}}</label>
                  <label for=""> hora fin: {{$acta->hora_fin}}</label>

                  <textarea name="acta_votacion" id="" cols="80" rows="40">{{$acta->acta_votacion}}</textarea>
                  
                  <div class="d-flex flex-column container">
                     <a href="{{ route('actas.index')}}" class="btn btn-secondary">regresar</a>

                  </div> 
              
              </form>
              </div>
              </div>
@endsection