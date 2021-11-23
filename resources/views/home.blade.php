@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    @if(auth()->user()->id_role==2)
    <a href="{{ route('encargados.index') }}" class="btn btn-secondary mt-3 mb-3">Encargados SG-SST <i class="bi bi-person-plus-fill"></i></a>
    <a href="{{ route('empresas.index') }}" class="btn btn-secondary mt-3 mb-3">Empresas <i class="bi bi-person-plus-fill"></i></a>
    <a href="{{ route('compromisos.index') }}" class="btn btn-secondary mt-3 mb-3">Compromisos del gerente <i class="bi bi-person-plus-fill"></i></a>
    <a href="{{ route('proveedores.index') }}" class="btn btn-secondary mt-3 mb-3">Proveedores <i class="bi bi-person-plus-fill"></i></a>
    <a href="{{ route('riesgos.index') }}" class="btn btn-secondary mt-3 mb-3">Riesgos psicosociales <i class="bi bi-person-plus-fill"></i></a>
    <a href="{{ route('planes.index') }}" class="btn btn-secondary mt-3 mb-3">Plan de emergencia <i class="bi bi-person-plus-fill"></i></a>
         

    @endif
</div>
@endsection
