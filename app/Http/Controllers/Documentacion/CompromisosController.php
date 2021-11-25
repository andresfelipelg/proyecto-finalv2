<?php

namespace App\Http\Controllers\Documentacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documentacion\Compromiso;
use App\Models\Role;
use App\Models\User;

class CompromisosController extends Controller
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
        $compromisos=Compromiso::all();
        return view('documentacion.compromisos.index',[
            'compromisos'=> $compromisos,
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
        $roles=Role::get();
        return view('documentacion.compromisos.create',[
            'users'=> $users,
            'roles'=> $roles,
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
        $compromiso= new Compromiso;
        $compromiso->user_id= $request->user_id;
        $compromiso->role_id= $request->role_id;
        $compromiso->ind_compromiso= $request->ind_compromiso;

        if($request->hasFile("ruta_compromiso")){
            $file= $request->file("ruta_compromiso");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("compromiso/".$nombre);
            copy($file,$ruta);
            $compromiso->ruta_compromiso=$nombre;
        }

        $compromiso->save();
        return redirect('/compromisos');
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
        $compromiso=Compromiso::find($id);
        $usuarios=User::all();
        $roles=Role::all();
        return view('documentacion.compromisos.edit',[
            'compromiso'=> $compromiso,
            'usuarios'=> $usuarios,
            'roles'=> $roles,
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
        $compromiso=Compromiso::find($id);
        $compromiso->user_id= $request->user_id;
        $compromiso->role_id= $request->role_id;
        $compromiso->ind_compromiso= $request->ind_compromiso;

        if($request->hasFile("ruta_compromiso")){
            $file= $request->file("ruta_compromiso");

            $nombre="pdf_" . time() ."." .$file->guessExtension();

            $ruta= public_path("compromiso/".$nombre);
            copy($file,$ruta);
            $compromiso->ruta_compromiso=$nombre;
        }

        $compromiso->save();
        return redirect('/compromisos');
       
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $compromiso=Compromiso::find($id);
         $compromiso->delete();
         return redirect('/compromisos')->with('msn', 'registros eliminado con exito');
    }
}
