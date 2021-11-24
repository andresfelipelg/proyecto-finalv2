<?php

namespace App\Http\Controllers\Documentacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documentacion\Empresa;
use App\Models\Documentacion\Tipo_empresa;
use App\Models\Documentacion\Actividad_economica;


class EmpresasController extends Controller
{
    public function __Construct(){
        $this->middleware('auth');
       
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas=Empresa::all();
        return view('documentacion.empresas.index', [
            'empresas'=> $empresas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $actiEcos= Actividad_economica::get();
        $tipoEmpresas=tipo_empresa::get();
        return view('documentacion.empresas.create',[
            'actiEcos'=> $actiEcos,
            'tipoEmpresas'=> $tipoEmpresas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa=new Empresa;
        $empresa->id=$request->id;
        $empresa->nom_empresa= $request->nom_empresa;
        $empresa->val_latitud= $request->val_latitud;
        $empresa->val_longitud= $request->val_longitud;
        $empresa->actiEco_id= $request->actiEco_id;
        $empresa->ind_natJurid= $request->ind_natJurid;
        $empresa->tel_contacto1= $request->tel_contacto1;
        $empresa->correo= $request->correo;
        $empresa->tipo_empresa_id= $request->tipo_empresa_id;

        $empresa->save();
        return redirect('/empresas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa= Empresa::where('id',$id)->first();
        $actiEco=Actividad_economica::all();
        $tipoEmpresa=Tipo_empresa::all();
        return view('documentacion.empresas.edit',[
            'empresa'=> $empresa,
            'actiEco'=>$actiEco,
            'tipoEmpresa'=> $tipoEmpresa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresa=Empresa::find($id);
        $empresa->update($request->all());
        return redirect('/empresas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa=Empresa::find($id);
         $empresa->delete();
         return redirect('/empresas')->with('msn', 'registros eliminado con exito');
    }
}
