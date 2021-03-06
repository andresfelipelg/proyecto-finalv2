<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;

use Illuminate\Http\Request;

class UserController extends Controller
{

    // public function __Construct(){
    //     $this->middleware('auth');
        
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$usuarios = User::get();
        
        $usuarios = User::all();

        return view('usuarios.index',[
            'usuarios' => $usuarios,
            

        ]);
    }

    public function login()
    {
        
        return view('usuarios.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::get();
        
        return view('usuarios.create',[
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
        $usuario = new User; 
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->cedula = $request->cedula;
        $usuario->telefono = $request->telefono;
        $usuario->celular = $request->celular;
        $usuario->direccion = $request->direccion;
        $usuario->email = $request->email;
        $usuario->id_role = $request->id_role;
        $usuario->password = $request->password;
        
        $usuario->save();

        return redirect('/usuarios');




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
        $user = User::find($id);
        $roles = Role::all();

        return view('usuarios.edit',[
            'user'=>$user,
            'roles'=>$roles,
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
          $user= User::find($id);
          $user->update($request->all());
          return redirect('usuarios');
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

    //funciones para modificar el estado de un usuario

    public function status_edit($id)
    {
          $user= User::find($id);
          $status=Status::all();
          
          return view('usuarios.status',[
              'user'=> $user,
              'status'=>$status
          ]);
    }

    public function status_update(Request $request, $id){

        $user=User::find($id);
        $user->status_id= $request->status_id;
        $user->save();
        return redirect('usuarios');
    }
}
