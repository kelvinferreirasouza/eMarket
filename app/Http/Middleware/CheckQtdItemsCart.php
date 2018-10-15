<?php

namespace App\Http\Middleware;

use Closure;
use App\Carrinho;

class CheckQtdItemsCart
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
        $carrinho = new Carrinho;
        
        // verifica se existe algum item no carrinho
        if($carrinho->totalItems() < 1)
            return redirect()->back()->with('message', 'Não existe itens no carrinho!');
        
        return $next($request);
    }
}
