<?php

namespace App\Policies;

use App\Usuario;
use App\Venda;
use Illuminate\Auth\Access\HandlesAuthorization;

class VendaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the venda.
     *
     * @param  \  $user
     * @param  \App\Venda  $venda
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create vendas.
     *
     * @param  \  $user
     * @return mixed
     */
    public function create(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can update the venda.
     *
     * @param  \  $user
     * @param  \App\Venda  $venda
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can delete the venda.
     *
     * @param  \  $user
     * @param  \App\Venda  $venda
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can restore the venda.
     *
     * @param  \  $user
     * @param  \App\Venda  $venda
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the venda.
     *
     * @param  \  $user
     * @param  \App\Venda  $venda
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
