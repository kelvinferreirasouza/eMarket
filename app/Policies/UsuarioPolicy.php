<?php

namespace App\Policies;

use App\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class UsuarioPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the usuario.
     *
     * @param  \App\User  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function view(Usuario $usuario)
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
    public function create(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can update the usuario.
     *
     * @param  \App\User  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can delete the usuario.
     *
     * @param  \App\User  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1;
    }
}
