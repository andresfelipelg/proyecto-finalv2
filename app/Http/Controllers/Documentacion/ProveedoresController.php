<?php

namespace App\Http\Controllers\Documentacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documentacion\Proveedor;


class ProveedoresController extends Controller
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
        $proveedores=Proveedor::all();
        return view('documentacion.proveedores.index',[
            'proveedores'=> $proveedores,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentacion.proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor= new Proveedor;
        $proveedor->id= $request->id;
        $proveedor->nom_proveedor= $request->nom_proveedor;
        $proveedor->arl_proveedor= $request->arl_proveedor;

        if($request->hasFile("ruta_certARL")){
            $file= $request->file("ruta_certARL");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("certARL/".$nombre);
            copy($file,$ruta);
            $proveedor->ruta_certARL=$nombre;
        }
        if($request->hasFile("ruta_segSocial")){
            $file= $request->file("ruta_segSocial");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("segSocial/".$nombre);
            copy($file,$ruta);
            $proveedor->ruta_segSocial=$nombre;
        }
        if($request->hasFile("ruta_fichaSegu")){
            $file= $request->file("ruta_fichaSegu");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("fichaSegu/".$nombre);
            copy($file,$ruta);
            $proveedor->ruta_fichaSegu=$nombre;
        }

        $proveedor->save();
        return redirect('/proveedores');
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
        $proveedor=Proveedor::find($id);
        return view('documentacion.proveedores.edit',[
            'proveedor'=> $proveedor,
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
        $proveedor=Proveedor::find($id);
        $proveedor->id= $request->id;
        $proveedor->nom_proveedor= $request->nom_proveedor;
        $proveedor->arl_proveedor= $request->arl_proveedor;

        if($request->hasFile("ruta_certARL")){
            $file= $request->file("ruta_certARL");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("certARL/".$nombre);
            copy($file,$ruta);
            $proveedor->ruta_certARL=$nombre;
        }
        if($request->hasFile("ruta_segSocial")){
            $file= $request->file("ruta_segSocial");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("segSocial/".$nombre);
            copy($file,$ruta);
            $proveedor->ruta_segSocial=$nombre;
        }
        if($request->hasFile("ruta_fichaSegu")){
            $file= $request->file("ruta_fichaSegu");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("fichaSegu/".$nombre);
            copy($file,$ruta);
            $proveedor->ruta_fichaSegu=$nombre;
        }

        $proveedor->save();
        return redirect('/proveedores');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor=Proveedor::find($id);
        $proveedor->delete();
        return redirect('/proveedores')->with('msn', 'registros eliminado con exito');
    }
}
