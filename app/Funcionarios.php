<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = array('pessoaId', 'funcPassword', 'funcCargoId', 'funcSalario',
    'empresaId', 'dataAdmissao', 'dataDemissao', 'dataCadastro', 'horaCadastro', 'isAtivo');

protected $table = 'funcionarios';
}
