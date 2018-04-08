<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $fillable = array('produtoMarca', 'dataCadastro','horaCadastro', 'isAtivo');

    protected $table = 'produtomarcas';
}
