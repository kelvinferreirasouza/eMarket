<?php

namespace App\Policies;

use App\Produto;
use App\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the usuario.
     *
     * @param  \App\User  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function view(Produto $produto, Usuario $usuario )
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create usuarios.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Produto $produto, Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can update the usuario.
     *
     * @param  \App\User  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function update(Produto $produto, Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can delete the usuario.
     *
     * @param  \App\User  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function delete(Produto $produto)
    {
        return $usuario->cargoId === 1;
    }
}
