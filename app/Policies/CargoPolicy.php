<?php

namespace App\Policies;

use App\Usuario;
use App\Cargo;
use Illuminate\Auth\Access\HandlesAuthorization;

class CargoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the cargo.
     *
     * @param  \  $user
     * @param  \App\Cargo  $cargo
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create cargos.
     *
     * @param  \  $user
     * @return mixed
     */
    public function create(Usuario $usuario)
    {
        return false;
    }

    /**
     * Determine whether the user can update the cargo.
     *
     * @param  \  $user
     * @param  \App\Cargo  $cargo
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1;
    }

    /**
     * Determine whether the user can delete the cargo.
     *
     * @param  \  $user
     * @param  \App\Cargo  $cargo
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the cargo.
     *
     * @param  \  $user
     * @param  \App\Cargo  $cargo
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the cargo.
     *
     * @param  \  $user
     * @param  \App\Cargo  $cargo
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
