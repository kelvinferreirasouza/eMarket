<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = array('produtoUnidade', 'produtoUnidadeSigla', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'produtounidade';
}
