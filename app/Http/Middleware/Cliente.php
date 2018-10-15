<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Cliente
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
        if (!Auth::guard('clientes')->check()) {
            return redirect(route('loginCliente'));
        }
        
        return $next($request);
    }
}
