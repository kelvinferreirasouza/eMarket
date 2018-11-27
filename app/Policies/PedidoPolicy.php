<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Cliente;
use App\Pedido;

class PedidoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function atualizarPedido(Cliente $cliente, Pedido $pedido)
    {
        
    }
}
