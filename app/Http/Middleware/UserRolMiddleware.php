<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class UserRolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     /*
        Middleware con la funcionalidad de proteger las rutas
        que son accesibles unicamente para los Ciudadanos Registrados
     */

    public function handle($request, Closure $next)
    {
        $user_rol = Auth::user()->rol;

        if($user_rol == 2){
            return redirect('bandeja');
        }
        return $next($request);
    }
}
