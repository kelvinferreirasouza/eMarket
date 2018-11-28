<?php

namespace App\Policies;

use App\Usuario;
use App\Unidade;
use Illuminate\Auth\Access\HandlesAuthorization;

class UnidadePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the unidade.
     *
     * @param  \  $user
     * @param  \App\Unidade  $unidade
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create unidades.
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
     * Determine whether the user can update the unidade.
     *
     * @param  \  $user
     * @param  \App\Unidade  $unidade
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can delete the unidade.
     *
     * @param  \  $user
     * @param  \App\Unidade  $unidade
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1;
    }

    /**
     * Determine whether the user can restore the unidade.
     *
     * @param  \  $user
     * @param  \App\Unidade  $unidade
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the unidade.
     *
     * @param  \  $user
     * @param  \App\Unidade  $unidade
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
