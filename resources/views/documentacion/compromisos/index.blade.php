@extends('layout.app')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{asset('../../css/style-index.css')}}">
    
@endsection

@section('contenido')



    <a href="{{ route('compromisos.create') }}" class="btn btn-secondary mt-3 mb-3"> ingresar compromiso <i class="bi bi-person-plus-fill"></i></a>

    <table class="table  table-striped table-hover mt-5 table-bordered shadow-lg" id="usuarios">
        <thead class="table-encabezado text-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Id del usuario</th>
                <th scope="col">Rol del usuario</th>
                <th scope="col">ind Compromiso</th>
                <th scope="col">Ruta Compromiso</th>
                
                <th class ="text-center"scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($compromisos as $compromiso )
   
            <tr>
                <td>{{ $compromiso-> id}} </td>
                <td>{{ $compromiso-> user_id}} </td>
                <td>{{ $compromiso-> role_id}} </td>
                <td>{{ $compromiso-> ind_compromiso}} </td>
                
                <td>   <a href="compromiso/{{$compromiso->ruta_compromiso}}" 
                             target="popup" 
                             onclick="window.open('compromiso/{{$compromiso->ruta_compromiso}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a> 
                </td>
                
                
                
                
                <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                       <a href="" class="btn btn-secondary">Editar</a>
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