<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    protected $fillable = array('produtoUnidade', 'produtoUnidadeSigla', 'dataCadastro',
                                'horaCadastro', 'isAtivo');

    protected $table = 'produtounidades';
}
