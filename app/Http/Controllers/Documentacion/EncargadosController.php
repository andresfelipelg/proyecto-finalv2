<?php

namespace App\Http\Controllers\Documentacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documentacion\Encargado;


class EncargadosController extends Controller
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
        $encargados=Encargado::all();
        return view('documentacion.encargados.index',[
            'encargados'=> $encargados,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentacion.encargados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Encargado::create($request->all());

        $encargado= new Encargado;
        $encargado->nom_encargado= $request->nom_encargado;
        $encargado->ape_encargado= $request->ape_encargado;
        $encargado->nivel_estudio= $request->nivel_estudio;
        
        
        if($request->hasFile("ruta_hv")){
            $file= $request->file("ruta_hv");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("hv/".$nombre);
            copy($file,$ruta);
            $encargado->ruta_hv=$nombre;
        }

        if($request->hasFile("ruta_diploma")){
            $file= $request->file("ruta_diploma");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("diplomas/".$nombre);
            copy($file,$ruta);
            $encargado->ruta_diploma=$nombre;
        }

        if($request->hasFile("ruta_certi50h")){
            $file= $request->file("ruta_certi50h");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("certi50h/".$nombre);
            copy($file,$ruta);
            $encargado->ruta_certi50h=$nombre;
        }

        if($request->hasFile("ruta_certiSalud")){
            $file= $request->file("ruta_certiSalud");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("certiSalud/".$nombre);
            copy($file,$ruta);
            $encargado->ruta_certiSalud=$nombre;
        }
        
        
    

        $encargado->save();
        return redirect('/encargados');

        

        
        

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
        $encargado=Encargado::find($id);

        return view('documentacion.encargados.edit',[
            'encargado'=> $encargado,
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
        $encargado=Encargado::find($id);
        $encargado->nom_encargado= $request->nom_encargado;
        $encargado->ape_encargado= $request->ape_encargado;
        $encargado->nivel_estudio= $request->nivel_estudio;
        
        
        if($request->hasFile("ruta_hv")){
            $file= $request->file("ruta_hv");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("hv/".$nombre);
            copy($file,$ruta);
            $encargado->ruta_hv=$nombre;
        }

        if($request->hasFile("ruta_diploma")){
            $file= $request->file("ruta_diploma");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("diplomas/".$nombre);
            copy($file,$ruta);
            $encargado->ruta_diploma=$nombre;
        }

        if($request->hasFile("ruta_certi50h")){
            $file= $request->file("ruta_certi50h");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("certi50h/".$nombre);
            copy($file,$ruta);
            $encargado->ruta_certi50h=$nombre;
        }

        if($request->hasFile("ruta_certiSalud")){
            $file= $request->file("ruta_certiSalud");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("certiSalud/".$nombre);
            copy($file,$ruta);
            $encargado->ruta_certiSalud=$nombre;
        }
        
        
    

        $encargado->save();
        return redirect('/encargados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encargado=Encargado::find($id);
        $encargado->delete();
        return redirect('/encargados')->with('msn', 'registros eliminados con exito');
    }
}
