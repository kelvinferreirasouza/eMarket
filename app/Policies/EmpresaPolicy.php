<?php

namespace App\Policies;

use App\Usuario;
use App\Empresa;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmpresaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the empresa.
     *
     * @param  \  $user
     * @param  \App\Empresa  $empresa
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create empresas.
     *
     * @param  \  $user
     * @return mixed
     */
    public function create(Usuario $usuario)
    {
        return $usuario->cargoId === 1;
    }

    /**
     * Determine whether the user can update the empresa.
     *
     * @param  \  $user
     * @param  \App\Empresa  $empresa
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1;
    }

    /**
     * Determine whether the user can delete the empresa.
     *
     * @param  \  $user
     * @param  \App\Empresa  $empresa
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1;
    }

    /**
     * Determine whether the user can restore the empresa.
     *
     * @param  \  $user
     * @param  \App\Empresa  $empresa
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the empresa.
     *
     * @param  \  $user
     * @param  \App\Empresa  $empresa
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
