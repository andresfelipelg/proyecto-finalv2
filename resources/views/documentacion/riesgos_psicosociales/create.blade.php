@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style.css')}}">
    
@endsection

@section('contenido')

    <form action="{{ route('riesgos.store') }}" method="POST" enctype= "multipart/form-data">
        @csrf
        <div class="row">

             <div class="col-5 pt-5 m-auto ">
              <div class="text-center mt-5 ">
                  <i class=" display-1 bi bi-file-text-fill "></i>
                  <h1 class= "mt-3 h2 font-weight-normal text-white" >Riesgos psicosociales</h1>

                  

                
                     
                  
                  <div class="mb-3 mt-3 text-start">
                    
                    <label for="ruta_docLegal" class="form-label">subir documento legal</label>
                    <input type="file" name="ruta_docLegal">
                  </div>
                  <div class="mb-3 mt-3 text-start">
                    
                    
                    

                  
                  
                <div class="d-grid ">
                <button class="mt-2 btn btn-dark" type="submit">Enviar</button> 
              
              </form>
              </div>
              </div>
@endsection