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



    <a href="{{ route('proveedores.create') }}" class="btn btn-secondary mt-3 mb-3"> Nuevo proveedor <i class="bi bi-person-plus-fill"></i></a>

    <table class="table  table-striped table-hover mt-5 table-bordered shadow-lg" id="usuarios">
        <thead class="table-encabezado text-dark">
            <tr>
                <th scope="col">NIT</th>
                <th scope="col">Nombre</th>
                <th scope="col">ARL Proveedor</th>
                <th scope="col">ARL certificado(PDF)</th>
                <th scope="col">Seguridad social certificado(PDF)</th>
                <th scope="col">Ficha(PDF)</th>
                <th class ="text-center"scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor )
   
            <tr>
                <td>{{ $proveedor-> id}} </td>
                <td>{{ $proveedor-> nom_proveedor}} </td>
                <td>{{ $proveedor-> arl_proveedor}} </td>
                
                <td>   <a href="certARL/{{$proveedor->ruta_certARL}}" 
                             target="popup" 
                             onclick="window.open('certARL/{{$proveedor->ruta_certARL}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a> 
                </td>
                <td><a href="segSocial/{{$proveedor->ruta_segSocial}}" 
                             target="popup" 
                             onclick="window.open('segSocial/{{$proveedor->ruta_segSocial}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a>
                </td>
                <td><a href="fichaSegu/{{$proveedor->ruta_fichaSegu}}" 
                             target="popup" 
                             onclick="window.open('fichaSegu/{{$proveedor->ruta_fichaSegu}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a>
                    
                </td>
                
                
                
                <td>
                <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-secondary">Editar</a>
                <form action="{{route('proveedores.delete',$proveedor->id)}}" method="post">
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