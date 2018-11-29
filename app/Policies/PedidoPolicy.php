<?php

namespace App\Policies;

use App\Usuario;
use App\Pedido;
use Illuminate\Auth\Access\HandlesAuthorization;

class PedidoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the pedido.
     *
     * @param  \  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create pedidos.
     *
     * @param  \  $user
     * @return mixed
     */
    public function create(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can update the pedido.
     *
     * @param  \  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can delete the pedido.
     *
     * @param  \  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can restore the pedido.
     *
     * @param  \  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the pedido.
     *
     * @param  \  $user
     * @param  \App\Pedido  $pedido
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
