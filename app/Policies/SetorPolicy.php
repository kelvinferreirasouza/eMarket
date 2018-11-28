<?php

namespace App\Policies;

use App\Usuario;
use App\Setor;
use Illuminate\Auth\Access\HandlesAuthorization;

class SetorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the setor.
     *
     * @param  \  $user
     * @param  \App\Setor  $setor
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create setors.
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
     * Determine whether the user can update the setor.
     *
     * @param  \  $user
     * @param  \App\Setor  $setor
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can delete the setor.
     *
     * @param  \  $user
     * @param  \App\Setor  $setor
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can restore the setor.
     *
     * @param  \  $user
     * @param  \App\Setor  $setor
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the setor.
     *
     * @param  \  $user
     * @param  \App\Setor  $setor
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
