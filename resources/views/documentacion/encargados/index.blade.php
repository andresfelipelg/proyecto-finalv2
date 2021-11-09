@extends('layout.app')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{asset('../../css/style-index.css')}}">
    
@endsection

@section('contenido')



    <a href="{{ route('encargados.create') }}" class="btn btn-secondary mt-3 mb-3"> Nuevo encargado <i class="bi bi-person-plus-fill"></i></a>

    <table class="table  table-striped table-hover mt-5 table-bordered shadow-lg" id="usuarios">
        <thead class="table-encabezado text-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nivel de estudio</th>
                <th scope="col">hoja de vida(PDF)</th>
                <th scope="col">Diploma(PDF)</th>
                <th scope="col">Certificado 50 horas(PDF)</th>
                <th scope="col">Certificado de salud(PDF)</th>
                <th class ="text-center"scope="col">Accion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($encargados as $encargado )
   
            <tr>
                <td>{{ $encargado-> id}} </td>
                <td>{{ $encargado-> nom_encargado}} </td>
                <td>{{ $encargado-> ape_encargado}} </td>
                <td>{{ $encargado-> nivel_estudio}} </td>
                <td>   <a href="hv/{{$encargado->ruta_hv}}" 
                             target="popup" 
                             onclick="window.open('hv/{{$encargado->ruta_hv}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a> 
                </td>
                <td><a href="diplomas/{{$encargado->ruta_diploma}}" 
                             target="popup" 
                             onclick="window.open('diplomas/{{$encargado->ruta_diploma}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a>
                </td>
                <td><a href="certi50h/{{$encargado->ruta_certi50h}}" 
                             target="popup" 
                             onclick="window.open('certi50h/{{$encargado->ruta_certi50h}}','popup','width=600,height=600'); return false;">
                              Ver archivo
                      </a>
                    
                </td>
                <td><a href="certiSalud/{{$encargado->ruta_certiSalud}}" 
                             target="popup" 
                             onclick="window.open('certiSalud/{{$encargado->ruta_certiSalud}}','popup','width=600,height=600'); return false;">
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