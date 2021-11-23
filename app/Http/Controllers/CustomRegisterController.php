<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

class CustomRegisterController extends Controller
{
    public function registration()
    {
        $roles=Role::get();
        $status=Status::get();
        return view('usuarios.create',[
            'roles'=> $roles,
            'status'=> $status,
        ]);
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("home");
    }

    public function create(array $data)
    {
      return User::create([
        'nombre' => $data['nombre'],
        'apellido' => $data['apellido'],
        'cedula' => $data['cedula'],
        'telefono' => $data['telefono'],
        'celular' => $data['celular'],
        'direccion' => $data['direccion'],
        'id_role' => $data['id_role'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'status_id' => 1,

      ]);
    }
}
