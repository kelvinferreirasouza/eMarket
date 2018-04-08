<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuloAcessos extends Model
{
    protected $fillable = array('moduloNome', 'moduloDescricao', 'dataCadastro','horaCadastro', 'isAtivo');

    protected $table = 'moduloacessos';
}
