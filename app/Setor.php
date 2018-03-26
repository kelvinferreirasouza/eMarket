<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = array('produtoSetor', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'produtoSetor';
}
