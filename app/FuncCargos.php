<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncCargos extends Model
{
    protected $fillable = array('funcCargo', 'funcCargoDescricao', 'dataCadastro', 'horaCadastro', 'isAtivo');

    protected $table = 'funcionariocargos';
}
