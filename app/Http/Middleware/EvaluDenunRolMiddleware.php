<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class EvaluDenunRolMiddleware
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
        que son accesibles unicamente para los Evaluadores de Denuncias
        de las distintas entidades (PNC, Bomberos, etc)
     */

    public function handle($request, Closure $next)
    {
        $user_rol = Auth::user()->rol;

        if($user_rol == '1'){
            return redirect('/home');
        }elseif($user_rol == '3'){
            return redirect('/admin_users');
        }
        return $next($request);
    }
}
