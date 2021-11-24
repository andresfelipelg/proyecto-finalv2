<?php

namespace App\Http\Controllers\Documentacion;

use App\Http\Controllers\Controller;
use App\Models\Documentacion\Empresa;
use App\Models\Documentacion\Politica;
use Illuminate\Http\Request;

class PoliticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $politicas=Politica::all();
        return view('documentacion.politicas.index',[
            'politicas'=> $politicas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $empresas=Empresa::get();
        return view('documentacion.politicas.create',[
            'empresas' => $empresas

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
        $politicas = new Politica;
        $politicas->empresa_id = $request->empresa_id;
        $politicas->nom_empresa = $request->nom_empresa;
        
        if($request->hasFile("ruta_compromiso")){
            $file= $request->file("ruta_compromiso");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("ruta_compromiso/".$nombre);
            copy($file,$ruta);
            $politicas->ruta_compromiso=$nombre;
        }

        if($request->hasFile("ruta_requisitos")){
            $file= $request->file("ruta_requisitos");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("ruta_requisitos/".$nombre);
            copy($file,$ruta);
            $politicas->ruta_requisitos=$nombre;
        }

        if($request->hasFile("ruta_objetivos")){
            $file= $request->file("ruta_objetivos");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("ruta_objetivos/".$nombre);
            copy($file,$ruta);
            $politicas->ruta_objetivos=$nombre;
        }

        if($request->hasFile("ruta_documentacion")){
            $file= $request->file("ruta_documentacion");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("ruta_documentacion/".$nombre);
            copy($file,$ruta);
            $politicas->ruta_documentacion=$nombre;
        }
        if($request->hasFile("firma")){
            $file= $request->file("firma");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("firma_politicas/".$nombre);
            copy($file,$ruta);
            $politicas->firma=$nombre;
        }

        $politicas->fecha = $request->fecha;
        $politicas->save();
        
        return redirect('/politicas');
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
        $politica = Politica::find($id);
        $empresas = Empresa::get();

        return view('documentacion.politicas.edit',[
            'politica' => $politica,
            'empresas' => $empresas
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
        $politica = Politica::find($id);

        $politica->empresa_id = $request->empresa_id;
        $politica->nom_empresa = $request->nom_empresa;
        
        if($request->hasFile("ruta_compromiso")){
            $file= $request->file("ruta_compromiso");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("ruta_compromiso/".$nombre);
            copy($file,$ruta);
            $politica->ruta_compromiso=$nombre;
        }

        if($request->hasFile("ruta_requisitos")){
            $file= $request->file("ruta_requisitos");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("ruta_requisitos/".$nombre);
            copy($file,$ruta);
            $politica->ruta_requisitos=$nombre;
        }

        if($request->hasFile("ruta_objetivos")){
            $file= $request->file("ruta_objetivos");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("ruta_objetivos/".$nombre);
            copy($file,$ruta);
            $politica->ruta_objetivos=$nombre;
        }

        if($request->hasFile("ruta_documentacion")){
            $file= $request->file("ruta_documentacion");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("ruta_documentacion/".$nombre);
            copy($file,$ruta);
            $politica->ruta_documentacion=$nombre;
        }
        if($request->hasFile("firma")){
            $file= $request->file("firma");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("firma_politicas/".$nombre);
            copy($file,$ruta);
            $politica->firma=$nombre;
        }

        $politica->fecha = $request->fecha;
        $politica->save();

        return redirect('/politicas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
