<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, )
    {
        if (Auth::check() && auth()->user()->status_id == 2) {

            // usuario con sesión iniciada pero inactivo
        
            // cerramos su sesión
            Auth::guard()->logout();
        
            // invalidamos su sesión
            $request->session()->invalidate();
        
            // redireccionamos a donde queremos
            return redirect('login')->with('message','usario desactivado favor comunicarse con administracion');
        }
        return $next($request);
    }
}
