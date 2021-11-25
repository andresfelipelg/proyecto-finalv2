@extends('layout.app')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{asset('../../css/style-index.css')}}">
    
@endsection

@section('contenido')

 @if (session()->has('msn'))
        <div class="alert alert-danger">
            {{ session()->get('msn') }}
        </div>
    @endif



    <a href="{{ route('participantes.create') }}" class="btn btn-secondary mt-3 mb-3"> ingresar participante <i class="bi bi-person-plus-fill"></i></a>

    <table class="table  table-striped table-hover mt-5 table-bordered shadow-lg" id="usuarios">
        <thead class="table-encabezado text-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Id del usuario</th>
                <th scope="col">Id del Acta</th>
                <th scope="col">Id del Cargo</th>
                <th scope="col">Nombre del usuario</th>
                <th scope="col">Firma</th>
                
                
                <th class ="text-center"scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($participantes as $participante )
   
            <tr>
                <td>{{ $participante-> id}} </td>
                <td>{{ $participante-> user_id}} </td>
                <td>{{ $participante-> acta_id}} </td>
                <td>{{ $participante-> cargo_id}} </td>
                <td>{{ $participante-> nom_usuario}} </td>
                <td><a href="participantesFirma/{{$participante->firma}}" 
                             target="popup" 
                             onclick="window.open('participantesFirma/{{$participante->firma}}','popup','width=600,height=600'); return false;">
                              Ver firma
                      </a>
                </td>
                
                
                
                
                
                
                
                <td>
                <a href="{{route('participantes.edit', $participante->id)}}" class="btn btn-secondary">Editar</a>

                <form action="{{route('participantes.delete', $participante->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                       
                   <button class="btn btn-dark" type="submit" >Borrar</button>
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