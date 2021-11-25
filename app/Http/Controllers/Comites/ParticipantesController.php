<?php

namespace App\Http\Controllers\Comites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comites\Acta;
use App\Models\Comites\Participante;
use App\Models\Comites\Cargo;
use App\Models\User;


class ParticipantesController extends Controller
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
        $participantes=Participante::all();
        return view('comites.participantes.index',[
            'participantes'=> $participantes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::get();
        $actas=Acta::get();
        $cargos=Cargo::get();
        return view('comites.participantes.create',[
            'users'=> $users,
            'actas'=> $actas,
            'cargos'=> $cargos,
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
        $participante=new Participante;

        $participante->user_id= $request->user_id;
        $participante->acta_id= $request->acta_id;
        $participante->cargo_id= $request->cargo_id;
        $participante->nom_usuario= $request->nom_usuario;
       
        if($request->hasFile("firma")){
            $file= $request->file("firma");

            $nombre="firma_" . time() ."." .$file->guessExtension();

            $ruta= public_path("participantesFirma/".$nombre);
            copy($file,$ruta);
            $participante->firma=$nombre;
        }

        $participante->save();
        return redirect('/participantes');
        
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
        $users=User::get();
        $actas=Acta::get();
        $cargos=Cargo::get();
        $participante=Participante::find($id);
        return view('comites.participantes.edit',[
            'participante'=> $participante,
            'users'=> $users,
            'actas'=> $actas,
            'cargos'=> $cargos,
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
        $participante=Participante::find($id);
        $participante->user_id= $request->user_id;
        $participante->acta_id= $request->acta_id;
        $participante->cargo_id= $request->cargo_id;
        $participante->nom_usuario= $request->nom_usuario;
       
        if($request->hasFile("firma")){
            $file= $request->file("firma");

            $nombre="firma_" . time() ."." .$file->guessExtension();

            $ruta= public_path("participantesFirma/".$nombre);
            copy($file,$ruta);
            $participante->firma=$nombre;
        }

        $participante->save();
        return redirect('/participantes');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participante=Participante::find($id);
        $participante->delete();
        return redirect('/participantes')->with('msn', 'registros eliminados con exito');
    }
}
