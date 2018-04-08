<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setores extends Model
{
    protected $fillable = array('produtoSetor', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'produtoSetores';
}
