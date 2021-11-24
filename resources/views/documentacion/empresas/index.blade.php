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



    <a href="{{ route('empresas.create') }}" class="btn btn-secondary mt-3 mb-3"> Registro de empresas <i class="bi bi-person-plus-fill"></i></a>

    <table class="table  table-striped table-hover mt-5 table-bordered shadow-lg" id="usuarios">
        <thead class="table-encabezado text-dark">
            <tr>
                <th scope="col">NIT</th>
                <th scope="col">Nombre</th>
                <th scope="col">latitud</th>
                <th scope="col">longitud</th>
                <th scope="col">Actividad economica</th>
                <th scope="col">Natural o juridico</th>
                <th scope="col"> tel contacto</th>
                <th scope="col">Correo</th>
                <th scope="col">Tipo de empresa</th>
                <th class ="text-center"scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa )
   
            <tr>
                <td>{{ $empresa-> id}} </td>
                <td>{{ $empresa-> nom_empresa}} </td>
                <td>{{ $empresa-> val_latitud}} </td>
                <td>{{ $empresa-> val_longitud}} </td>
                <td>{{ $empresa-> getActiEco->nom_actividad}} </td>
                <td>{{ $empresa-> ind_natJurid}} </td>
                <td>{{ $empresa-> tel_contacto1}} </td>
                <td>{{ $empresa-> correo}} </td>
                <td>{{ $empresa-> getTipoEmpresa->nom_tipo}} </td>
                
                
                
                <td>
                <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-secondary">Editar</a>
                <form action="{{route('empresas.delete',$empresa->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                       
                       
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