<?php

namespace App\Policies;

use App\Usuario;
use App\Frete;
use Illuminate\Auth\Access\HandlesAuthorization;

class FretePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the frete.
     *
     * @param  \  $user
     * @param  \App\Frete  $frete
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create fretes.
     *
     * @param  \  $user
     * @return mixed
     */
    public function create(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can update the frete.
     *
     * @param  \  $user
     * @param  \App\Frete  $frete
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can delete the frete.
     *
     * @param  \  $user
     * @param  \App\Frete  $frete
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can restore the frete.
     *
     * @param  \  $user
     * @param  \App\Frete  $frete
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the frete.
     *
     * @param  \  $user
     * @param  \App\Frete  $frete
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
