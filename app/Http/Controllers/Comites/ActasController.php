<?php

namespace App\Http\Controllers\Comites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comites\Comite;
use App\Models\Comites\Cargo;
use App\Models\Comites\Acta;


class ActasController extends Controller
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
        $actas=Acta::all();
        return view('comites.actas.index',[
            'actas'=> $actas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comite= Comite::get();
        return view('comites.actas.create',[
            'comite'=> $comite,
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
        $acta= new Acta;
        $acta->comite_id= $request->comite_id;
        $acta->nom_citador= $request->nom_citador;
        $acta->lugar_acta= $request->lugar_acta;
        $acta->fecha_acta= $request->fecha_acta;
        $acta->hora_inicio= $request->hora_inicio;
        $acta->hora_fin= $request->hora_fin;
        $acta->acta_votacion= $request->acta_votacion;

        $acta->save();
        return redirect('/actas');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acta=Acta::find($id);
        return view('comites.actas.show',[
            'acta'=> $acta,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acta=Acta::find($id);

        $comites=Comite::get();
        return view('comites.actas.edit',[
            'comites'=> $comites,
            'acta'=> $acta,
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
        $acta=Acta::find($id);
        $acta->update($request->all());
        return redirect('/actas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acta=Acta::find($id);
        $acta->delete();
        return redirect('/actas')->with('msn', 'registros eliminados con exito');

    }
}
