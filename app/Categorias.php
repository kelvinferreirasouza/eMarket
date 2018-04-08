<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = array('produtoCategoria', 'produtoSetorId', 'dataCadastro','horaCadastro',
                                'isAtivo');

    protected $table = 'produtoCategorias';
}
