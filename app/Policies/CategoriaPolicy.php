<?php

namespace App\Policies;

use App\Usuario;
use App\Categoria;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the categoria.
     *
     * @param  \  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function view(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2 ||
               $usuario->cargoId === 3;
    }

    /**
     * Determine whether the user can create categorias.
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
     * Determine whether the user can update the categoria.
     *
     * @param  \  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function update(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can delete the categoria.
     *
     * @param  \  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function delete(Usuario $usuario)
    {
        return $usuario->cargoId === 1 || 
               $usuario->cargoId === 2;
    }

    /**
     * Determine whether the user can restore the categoria.
     *
     * @param  \  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function restore(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the categoria.
     *
     * @param  \  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function forceDelete(Usuario $usuario)
    {
        //
    }
}
