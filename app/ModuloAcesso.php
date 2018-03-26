<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuloAcesso extends Model
{
    protected $fillable = array('moduloNome', 'moduloDescricao', 'dataCadastro','horaCadastro', 'isAtivo');

    protected $table = 'moduloacesso';
}
