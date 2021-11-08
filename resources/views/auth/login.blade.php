@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('../../css/stylelogin.css')}}">


@endsection

@section('content')

    @if (session()->has('message'))
        <div class="alert alert-danger">
            {{ session()->get('message') }}
        </div>
    @endif
    
 <form  method= "POST" action="{{ route('login') }}">
     @csrf
     <section class="form-login">
        <h5>Formulario Login</h5>
        

        <input class="controls" type="email" name="email" value="" placeholder="correo">

        <input class="controls" type="password" name="password" value="" placeholder="Contraseña">

        <input class="buttons" type="submit" name="" value="Ingresar">

        <p><a href="#">¿Olvidaste tu contraseña?</a></p>


     </section>
 </form>
   
   

@endsection
