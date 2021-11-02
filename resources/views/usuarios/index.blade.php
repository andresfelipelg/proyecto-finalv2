@extends('layout.app')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{asset('../../css/style-index.css')}}">
    
@endsection

@section('contenido')



    <a href="{{ route('register-user') }}" class="btn btn-secondary mt-3 mb-3">Crear Usuario <i class="bi bi-person-plus-fill"></i></a>

    <table class="table  table-striped table-hover mt-5 table-bordered shadow-lg" id="usuarios">
        <thead class="table-encabezado text-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Rol</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Telefono</th>
                <th scope="col">Celular</th>
                <th scope="col">Direccion </th>
                <th scope="col">Email</th>
                <th class ="text-center"scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario )
   
            <tr>
                <td>{{ $usuario-> id}} </td>
                <td>{{ $usuario-> rol->nom_rol}} </td>
                <td>{{ $usuario-> nombre}} </td>
                <td>{{ $usuario-> apellido}} </td>
                <td>{{ $usuario-> cedula}} </td>
                <td>{{ $usuario-> telefono}}</td>
                <td>{{ $usuario-> celular}} </td>
                <td>{{ $usuario-> direccion}} </td>
                <td>{{ $usuario-> email}}</td>
                
                <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                       <a href="/usuarios/{{ $usuario->id }}/edit" class="btn btn-secondary">Editar</a>
                   <button href=""class="btn btn-dark" type="submit" >Borrar</button>
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
   