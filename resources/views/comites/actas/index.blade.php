@extends('layout.app')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{asset('../../css/style-index.css')}}">
    
@endsection

@section('contenido')



    <a href="{{ route('actas.create') }}" class="btn btn-secondary mt-3 mb-3"> ingresar acta <i class="bi bi-person-plus-fill"></i></a>

    <table class="table  table-striped table-hover mt-5 table-bordered shadow-lg" id="usuarios">
        <thead class="table-encabezado text-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Id del comite</th>
                <th scope="col">Nombre del citador</th>
                <th scope="col">lugar del acta</th>
                <th scope="col">Fecha del acta</th>
                <th scope="col">Hora de inicio</th>
                <th scope="col">Hora fin</th>
                
                <th class ="text-center"scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($actas as $acta )
   
            <tr>
                <td>{{ $acta-> id}} </td>
                <td>{{ $acta-> comite_id}} </td>
                <td>{{ $acta-> nom_citador}} </td>
                <td>{{ $acta-> lugar_acta}} </td>
                <td>{{ $acta-> fecha_acta}} </td>
                <td>{{ $acta-> hora_inicio}} </td>
                <td>{{ $acta-> hora_fin}} </td>
                
                
                
                
                
                
                <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                       <a href="{{ route('actas.edit', $acta->id)}}" class="btn btn-secondary">Editar</a>
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