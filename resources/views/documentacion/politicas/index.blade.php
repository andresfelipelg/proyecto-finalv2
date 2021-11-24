@extends('layout.app')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{asset('../../css/style-index.css')}}">
    
@endsection

@section('contenido')



    <a href="{{ route('politicas.create') }}" class="btn btn-secondary mt-3 mb-3"> Nuevo encargado <i class="bi bi-person-plus-fill"></i></a>

    <table class="table  table-striped table-hover mt-5 table-bordered shadow-lg" id="usuarios">
        <thead class="table-encabezado text-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Empresa id</th>
                <th scope="col">Nombre empresa</th>
                <th scope="col">Ruta compromiso</th>
                <th scope="col">Ruta requisitos</th>
                <th scope="col">Ruta Objetivos</th>
                <th scope="col">Ruta Documentacion</th>
                <th scope="col">Firma</th>
                <th scope="col">Fecha</th>
                <th class ="text-center"scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($politicas as $politica )
   
            <tr>
                <td>{{ $politica-> id}} </td>
                <td>{{ $politica-> empresa_id}} </td>
                <td>{{ $politica-> nom_empresa}} </td>
                <td>   <a href="ruta_compromiso/{{$politica->ruta_compromiso}}" 
                             target="popup" 
                             onclick="window.open('ruta_compromiso/{{$politica->ruta_compromiso}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a> 
                </td>
                <td>   <a href="ruta_requisitos/{{$politica->ruta_requisitos}}" 
                             target="popup" 
                             onclick="window.open('ruta_requisitos/{{$politica->ruta_requisitos}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a> 
                </td>
                <td>   <a href="ruta_objetivos/{{$politica->ruta_objetivos}}" 
                             target="popup" 
                             onclick="window.open('ruta_objetivos/{{$politica->ruta_objetivos}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a> 
                </td>
                <td>   <a href="ruta_documentacion/{{$politica->ruta_documentacion}}" 
                             target="popup" 
                             onclick="window.open('ruta_documentacion/{{$politica->ruta_documentacion}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a> 
                </td>
                <td>   <a href="firma_politicas/{{$politica->firma}}" 
                             target="popup" 
                             onclick="window.open('firma_politicas/{{$politica->firma}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a> 
                </td>
                <td>{{ $politica-> fecha}} </td>
                
                
                <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                       <a href="{{route('politicas.edit', $politica->id)}}" class="btn btn-secondary">Editar</a>
                       <a href="" class="btn btn-danger">Borrar</a>
                   <!--<button href=""class="btn btn-dark" type="submit" >Borrar</button>-->
               </form>
               </td>
            </tr>
        
            
                
            @endforeach
        </tbody>
      </table>
      @section('js')
          <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
          <script>
              $(document).ready(function() {
               $('#usuarios').DataTable({
                   
                   "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
               });
                } );
          </script>
      @endsection
    @endsection