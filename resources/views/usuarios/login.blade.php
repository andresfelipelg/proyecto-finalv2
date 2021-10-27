@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style-login.css')}}">
    
@endsection

@section('contenido')
    

    
    
    <title>Login</title>
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    
      <div class="col-3 pt-5 m-auto ">
      <div class="text-center mt-5 ">
      <form  action="">
          <i class=" display-1  bi bi-person-circle"></i>
          <h1 class= "mt-4 h2 font-weight-normal text-white" >Login</h1>

          <div class="mb-3 text-start">
           <label for="" class=" text-white text-start sr-only">Contraseña</label>
          <input class="form-control" type="email" placeholder="Ingrese el email">
        </div>

     
        <div class="mb-3 text-start">
          <label for="" class="sr-only text-white">Contraseña</label>
          <input class="form-control" type="password" placeholder="ingrese password">
        </div>
        <div class="d-grid ">
        
        <a href="{{ route('usuarios.index') }}" class="mt-2 btn btn-dark btn">Iniciar sesion</a>
      
      </form>
      </div>
      </div>


    
  </body>
</html>

@endsection