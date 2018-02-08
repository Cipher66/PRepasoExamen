<?php

namespace App\Http\Middleware;

use App\Usuario;
use Closure;

class permisoMiddleware
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
        if (Usuario::where('nombre', $request->input('nombre'))->first()->hasPermiso()){
            return $next($request);
        }

        return redirect('denegado');

    }
}
