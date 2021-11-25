<?php

namespace App\Http\Controllers\Documentacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documentacion\Riesgo_psicosocial;


class Riesgos_psicosocialesController extends Controller
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
        $riesgos=Riesgo_psicosocial::all();
        return view('documentacion.riesgos_psicosociales.index',[
            'riesgos'=> $riesgos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentacion.riesgos_psicosociales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $riesgo=new Riesgo_psicosocial;
        if($request->hasFile("ruta_docLegal")){
            $file= $request->file("ruta_docLegal");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("riesgosPsicos/".$nombre);
            copy($file,$ruta);
            $riesgo->ruta_docLegal=$nombre;
        }
        $riesgo->save();
        return redirect('/riesgos_psicosociales');

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
        $riesgo=Riesgo_psicosocial::find($id);
        return view('documentacion.riesgos_psicosociales.edit',[
            'riesgo'=> $riesgo,
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
        $riesgo=Riesgo_psicosocial::find($id);
        if($request->hasFile("ruta_docLegal")){
            $file= $request->file("ruta_docLegal");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("riesgosPsicos/".$nombre);
            copy($file,$ruta);
            $riesgo->ruta_docLegal=$nombre;
        }
        $riesgo->save();
        return redirect('/riesgos_psicosociales');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $riesgo=Riesgo_psicosocial::find($id);
        $riesgo->delete();
        return redirect('/riesgos_psicosociales')->with('msn', 'registros eliminado con exito');

    }
}
