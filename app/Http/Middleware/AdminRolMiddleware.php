<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class AdminRolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_rol = Auth::user()->rol;

        if($user_rol == 1){
            return redirect('/home');
        }elseif($user_rol == 2){
            return redirect('/bandeja');
        }
        return $next($request);
    }
}
