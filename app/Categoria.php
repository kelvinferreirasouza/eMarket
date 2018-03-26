<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = array('produtoCategoria', 'produtoSetorId', 'dataCadastro','horaCadastro', 'isAtivo');

    protected $table = 'produtoCategoria';
}
