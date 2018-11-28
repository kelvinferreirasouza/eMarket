<?php

namespace App\Policies;

use App\Usuario;
use App\Fornecedor;
use Illuminate\Auth\Access\HandlesAuthorization;

class FornecedorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the fornecedor.
     *
     * @param  \  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create fornecedors.
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
     * Determine whether the user can update the fornecedor.
     *
     * @param  \  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can delete the fornecedor.
     *
     * @param  \  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1;
    }

    /**
     * Determine whether the user can restore the fornecedor.
     *
     * @param  \  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the fornecedor.
     *
     * @param  \  $user
     * @param  \App\Fornecedor  $fornecedor
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
